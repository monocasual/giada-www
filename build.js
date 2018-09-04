const BUILD_DIR = `${__dirname}/build`;
const SRC_DIR   = `${__dirname}/src`;
const DATA_DIR  = `${SRC_DIR}/data`;


const FSE     = require('fs-extra');
const PP      = require('preprocess');
const GLOB    = require("glob");
const SASS    = require('node-sass');
const JSHINT  = require('jshint').JSHINT;
const UGLYJS  = require('uglify-js');
const PUG     = require('pug');
const CONCAT  = require('concat');
const CRYPTO  = require('crypto');
const PATH    = require('path');
const PACKAGE = require('./package.json');
const NEWS    = require(`${DATA_DIR}/news.json`);
const RELEASE = require(`${DATA_DIR}/release.json`);


const LINUX_PKG   = `${DATA_DIR}/Giada-${RELEASE.version}-x86_64.AppImage`;
const WINDOWS_PKG = `${DATA_DIR}/giada-${RELEASE.version}-win-amd64.zip`;
const MACOS_PKG   = `${DATA_DIR}/giada-${RELEASE.version}-osx-amd64.zip`;
const SOURCE_PKG  = `${DATA_DIR}/giada-${RELEASE.version}-src.tar.gz`;


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
		JSHINT(FSE.readFileSync(file, 'utf8'));
		if (JSHINT.errors.length > 0) {
			console.log(JSHINT.errors);
			process.exit();
		}
	});
}


function compileHTML()
{
	let constants = PACKAGE.constants;
	constants.version = PACKAGE.version;
	
	let release = RELEASE;
	release.linux   = { 'md5': md5(LINUX_PKG),   'path': LINUX_PKG.replace(DATA_DIR, 'data') };
	release.windows = { 'md5': md5(WINDOWS_PKG), 'path': WINDOWS_PKG.replace(DATA_DIR, 'data') };
	release.macos   = { 'md5': md5(MACOS_PKG),   'path': MACOS_PKG.replace(DATA_DIR, 'data') };
	release.source  = { 'md5': md5(SOURCE_PKG),  'path': SOURCE_PKG.replace(DATA_DIR, 'data') };
	
	const opt = {
		'NODE_ENV'  : process.env.NODE_ENV,
		'CONSTANTS' : constants,
		'RELEASE'   : RELEASE,
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
	FSE.copySync(LINUX_PKG,   `${BUILD_DIR}/data/${PATH.basename(LINUX_PKG)}`);
	FSE.copySync(WINDOWS_PKG, `${BUILD_DIR}/data/${PATH.basename(WINDOWS_PKG)}`);
	FSE.copySync(MACOS_PKG,   `${BUILD_DIR}/data/${PATH.basename(MACOS_PKG)}`);
	FSE.copySync(SOURCE_PKG,  `${BUILD_DIR}/data/${PATH.basename(SOURCE_PKG)}`);

	console.log(`Copy extra fonts`);
	FSE.copySync(`${SRC_DIR}/font`, `${BUILD_DIR}/font`);

	console.log(`Copy forum`);
	FSE.copySync(`${SRC_DIR}/forum`, `${BUILD_DIR}/forum`);
}


function compileCSS() 
{
	console.log(`Compile CSS`);
	const env = process.env.NODE_ENV;
	const res = SASS.renderSync(
	{ 
		'file':        `${SRC_DIR}/css/main.sass` ,
		'outputStyle': env === 'prod' ? 'compressed' : 'expanded',
	});
	FSE.outputFileSync(`${BUILD_DIR}/css/main-${PACKAGE.version}.css`, res.css.toString());
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