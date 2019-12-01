const BUILD_DIR = `${__dirname}/build`;
const SRC_DIR   = `${__dirname}/src`;
const DATA_DIR  = `${SRC_DIR}/data`;


const FSE     = require('fs-extra');
const PP      = require('preprocess');
const GLOB    = require('glob');
const JSHINT  = require('jshint').JSHINT;
const UGLYJS  = require('uglify-js');
const PUG     = require('pug');
const CONCAT  = require('concat');
const CRYPTO  = require('crypto');
const PATH    = require('path');
const PACKAGE = require('./package.json');
const NEWS    = require(`${DATA_DIR}/news.json`);
const RELEASE = require(`${DATA_DIR}/release.json`);


const HAS_BETA     = RELEASE.version_beta !== null;
const LINUX_PKG    = `${DATA_DIR}/Giada-${RELEASE.version}-x86_64.AppImage`;
const WINDOWS_PKG  = `${DATA_DIR}/giada-${RELEASE.version}-win-amd64.zip`;
const MACOS_PKG    = `${DATA_DIR}/giada-${RELEASE.version}-osx-amd64.zip`;
const SOURCE_PKG   = `${DATA_DIR}/giada-${RELEASE.version}-src.tar.gz`;
const LINUX_BETA   = `${DATA_DIR}/Giada-${RELEASE.version_beta}-x86_64.AppImage`;
const WINDOWS_BETA = `${DATA_DIR}/giada-${RELEASE.version_beta}-win-amd64.zip`;
const MACOS_BETA   = `${DATA_DIR}/giada-${RELEASE.version_beta}-osx-amd64.zip`;

/* -------------------------------------------------------------------------- */


function md5(file) 
{
	return CRYPTO.createHash('md5').update(FSE.readFileSync(file), 'utf8').digest('hex');
}


function setup()
{
	console.log('Create build dir');
	FSE.removeSync(BUILD_DIR);
	FSE.mkdirsSync(BUILD_DIR)
}


function jsHint()
{
	GLOB.sync(`${SRC_DIR}/js/*.js`).forEach(function(file) 
	{
		console.log(`Lint JS: ${file}`);
		JSHINT(FSE.readFileSync(file, 'utf8'), { 'esversion': 6 });
		if (JSHINT.errors.length > 0) {
			console.log(JSHINT.errors);
			process.exit(1);
		}
	});
}


function compileHTML()
{
	let constants = PACKAGE.constants;
	constants.version = PACKAGE.version;
	
	let release = RELEASE;
	release.linux    = { 'md5': md5(LINUX_PKG),   'path': LINUX_PKG.replace(DATA_DIR, 'data') };
	release.windows  = { 'md5': md5(WINDOWS_PKG), 'path': WINDOWS_PKG.replace(DATA_DIR, 'data') };
	release.macos    = { 'md5': md5(MACOS_PKG),   'path': MACOS_PKG.replace(DATA_DIR, 'data') };
	release.source   = { 'md5': md5(SOURCE_PKG),  'path': SOURCE_PKG.replace(DATA_DIR, 'data') };

	let beta = {
		'version': RELEASE.version_beta,
		'linux':   { 'path': LINUX_BETA.replace(DATA_DIR, 'data') },
		'windows': { 'path': WINDOWS_BETA.replace(DATA_DIR, 'data') },
		'macos':   { 'path': MACOS_BETA.replace(DATA_DIR, 'data') }
	};

	const opt = {
		'NODE_ENV'  : process.env.NODE_ENV,
		'CONSTANTS' : constants,
		'RELEASE'   : release,
		'HAS_BETA'  : HAS_BETA,
		'BETA'      : beta,
		'NEWS'      : NEWS
	};
	
	GLOB.sync(`${SRC_DIR}/html/*.pug`).forEach(function(file) 
	{
		console.log(`Compile HTML: ${file}`);
		const fnc = PUG.compileFile(file);
		const out = `${BUILD_DIR}/${PATH.basename(file, '.pug')}.html`; 
		FSE.writeFileSync(out, fnc(opt));
	});

	GLOB.sync(`${SRC_DIR}/html/documentation/*.pug`).forEach(function(file)
	{
		console.log(`Compile HTML: ${file}`);
		const fnc = PUG.compileFile(file);
		const out = `${BUILD_DIR}/documentation-${PATH.basename(file, '.pug')}.html`; 
		FSE.writeFileSync(out, fnc(opt));
	});
}


function compileJs() {
	/* Preprocess js first and put them into temp dir. */
	FSE.mkdirsSync(`${BUILD_DIR}/js`);
	FSE.mkdirsSync(`/tmp/js`);
	GLOB.sync(`${SRC_DIR}/js/*.js`).forEach(function(file) 
	{
		console.log(`Preprocess Js: ${file}`);
		PP.preprocessFileSync(file, file.replace(`${SRC_DIR}/js`, `/tmp/js`), process.env);			
	});
	FSE.copySync(`${SRC_DIR}/js/deps`, `/tmp/js/deps`);

	/* Then concat it. */

	let files = [
		'/tmp/js/deps/bootstrap-transition-3.2.0.js',
		'/tmp/js/deps/bootstrap-carousel-3.2.0.js',
		'/tmp/js/consts.js',
		'/tmp/js/utils.js',
		'/tmp/js/cookie-banner.js',
		'/tmp/js/follow-us-popup.js',
		'/tmp/js/main-menu.js',
		'/tmp/js/patch-converter.js',
	];
	CONCAT(files, `${BUILD_DIR}/js/main-${PACKAGE.version}.js`);
}


function copyStatic() 
{
	console.log(`Copy images`);
	FSE.mkdirsSync(`${BUILD_DIR}/images`);
	FSE.copySync(`${SRC_DIR}/images`, `${BUILD_DIR}/images`);

	console.log(`Copy packages`);
	FSE.mkdirsSync(`${BUILD_DIR}/data`);
	FSE.copySync(LINUX_PKG,    `${BUILD_DIR}/data/${PATH.basename(LINUX_PKG)}`);
	FSE.copySync(WINDOWS_PKG,  `${BUILD_DIR}/data/${PATH.basename(WINDOWS_PKG)}`);
	FSE.copySync(MACOS_PKG,    `${BUILD_DIR}/data/${PATH.basename(MACOS_PKG)}`);
	FSE.copySync(SOURCE_PKG,   `${BUILD_DIR}/data/${PATH.basename(SOURCE_PKG)}`);
	if (HAS_BETA) 
	{
		FSE.copySync(LINUX_BETA,   `${BUILD_DIR}/data/${PATH.basename(LINUX_BETA)}`);
		FSE.copySync(WINDOWS_BETA, `${BUILD_DIR}/data/${PATH.basename(WINDOWS_BETA)}`);
		FSE.copySync(MACOS_BETA,   `${BUILD_DIR}/data/${PATH.basename(MACOS_BETA)}`);
	}

	console.log(`Copy extra fonts`);
	FSE.copySync(`${SRC_DIR}/font`, `${BUILD_DIR}/font`);

	console.log(`Copy forum`);
	FSE.copySync(`${SRC_DIR}/forum`, `${BUILD_DIR}/forum`);

    console.log(`Copy extra data`);   
    FSE.copySync(`${SRC_DIR}/extra/ads.txt`, `${BUILD_DIR}/ads.txt`);
}


function compileCSS() 
{
	console.log(`Compile CSS`);
	FSE.copySync(`${SRC_DIR}/css/giada.css`, `${BUILD_DIR}/css/main-${PACKAGE.version}.css`);
	/* TODO - minify CSS */
}


function uglifyJs()
{
	/* TODO */
}


/* -------------------------------------------------------------------------- */


if (process.argv[2] != 'dev' && process.argv[2] != 'prod') 
{
	console.log('Usage: nodejs build.js <dev|prod>'); 
}
else 
{
	process.env.NODE_ENV = process.argv[2];

	setup();
	jsHint();
	compileHTML();
	compileJs();
	copyStatic();
	compileCSS();

	if (process.env.NODE_ENV === 'prod') 
	{
		uglifyJs();
		//uglifyHtml();
	}
}
