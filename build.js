const BUILD_DIR = `${__dirname}/build`
const SRC_DIR = `${__dirname}/src`
const DATA_DIR = `${SRC_DIR}/data`

const CHILD_PROCESS = require('child_process')
const FSE = require('fs-extra')
const GLOB = require('glob')
const PUG = require('pug')
const CONCAT = require('concat')
const CRYPTO = require('crypto')
const PATH = require('path')
const PACKAGE = require('./package.json')
const RELEASE = require(`${DATA_DIR}/release.json`)

const LINUX_PKG = `${DATA_DIR}/Giada-v${RELEASE.version}-x86_64.AppImage`
const WINDOWS_PKG = `${DATA_DIR}/giada-v${RELEASE.version}-x86_64-windows.zip`
const MACOS_PKG = `${DATA_DIR}/giada-v${RELEASE.version}-x86_64-macos.zip`
const SOURCE_PKG = `${DATA_DIR}/giada-v${RELEASE.version}-src.tar.gz`

/* -------------------------------------------------------------------------- */

function tryExecSync(cmd) {
    try {
        console.log(CHILD_PROCESS.execSync(cmd).toString())
    } catch (error) {
        console.error(error.stdout.toString())
        process.exit(1)
    }
}

function md5(file) {
    return CRYPTO.createHash('md5')
        .update(FSE.readFileSync(file), 'utf8')
        .digest('hex')
}

function getFileSizeMb(file) {
    const bytes = FSE.statSync(file).size
    const megaBytes = bytes / (1024 * 1024)
    const round = Math.round(megaBytes * 10 + Number.EPSILON) / 10
    return round
}

function setup() {
    console.log('Create build dir')
    FSE.removeSync(BUILD_DIR)
    FSE.mkdirsSync(BUILD_DIR)
}

function checkFormat() {
    console.log('Check formatting')
    tryExecSync('npm run check-format')
}

function compileHTML() {
    let constants = PACKAGE.constants
    constants.version = PACKAGE.version

    let release = RELEASE
    release.linux = {
        md5: md5(LINUX_PKG),
        path: LINUX_PKG.replace(DATA_DIR, 'data'),
        size: getFileSizeMb(LINUX_PKG),
    }
    release.windows = {
        md5: md5(WINDOWS_PKG),
        path: WINDOWS_PKG.replace(DATA_DIR, 'data'),
        size: getFileSizeMb(WINDOWS_PKG),
    }
    release.macos = {
        md5: md5(MACOS_PKG),
        path: MACOS_PKG.replace(DATA_DIR, 'data'),
        size: getFileSizeMb(MACOS_PKG),
    }
    release.source = {
        md5: md5(SOURCE_PKG),
        path: SOURCE_PKG.replace(DATA_DIR, 'data'),
        size: getFileSizeMb(SOURCE_PKG),
    }

    const opt = {
        NODE_ENV: process.env.NODE_ENV,
        CONSTANTS: constants,
        RELEASE: release,
    }

    GLOB.sync(`${SRC_DIR}/html/*.pug`).forEach(function (file) {
        console.log(`Compile HTML: ${file}`)
        const fnc = PUG.compileFile(file)
        const out = `${BUILD_DIR}/${PATH.basename(file, '.pug')}.html`
        FSE.writeFileSync(out, fnc(opt))
    })

    GLOB.sync(`${SRC_DIR}/html/documentation/*.pug`).forEach(function (file) {
        console.log(`Compile HTML: ${file}`)
        const fnc = PUG.compileFile(file)
        const out = `${BUILD_DIR}/documentation-${PATH.basename(
            file,
            '.pug'
        )}.html`
        FSE.writeFileSync(out, fnc(opt))
    })

    GLOB.sync(`${SRC_DIR}/html/tutorials/*.pug`).forEach(function (file) {
        console.log(`Compile HTML: ${file}`)
        const fnc = PUG.compileFile(file)
        const out = `${BUILD_DIR}/tutorial-${PATH.basename(file, '.pug')}.html`
        FSE.writeFileSync(out, fnc(opt))
    })
}

function compileJs() {
    console.log(`Compile JavaScript`)
    tryExecSync(
        `npm run compile-js -- -outfile ${BUILD_DIR}/js/main-${PACKAGE.version}.js`
    )
}

function copyStatic() {
    console.log(`Copy images`)
    FSE.mkdirsSync(`${BUILD_DIR}/images`)
    FSE.copySync(`${SRC_DIR}/images`, `${BUILD_DIR}/images`)

    console.log(`Copy packages`)
    FSE.mkdirsSync(`${BUILD_DIR}/data`)
    FSE.copySync(LINUX_PKG, `${BUILD_DIR}/data/${PATH.basename(LINUX_PKG)}`)
    FSE.copySync(WINDOWS_PKG, `${BUILD_DIR}/data/${PATH.basename(WINDOWS_PKG)}`)
    FSE.copySync(MACOS_PKG, `${BUILD_DIR}/data/${PATH.basename(MACOS_PKG)}`)
    FSE.copySync(SOURCE_PKG, `${BUILD_DIR}/data/${PATH.basename(SOURCE_PKG)}`)
}

function compileCSS() {
    console.log(`Compile CSS`)
    FSE.mkdirsSync(`${BUILD_DIR}/css`)
    if (process.env.NODE_ENV === 'prod') {
        const files = GLOB.sync(`${SRC_DIR}/css/*.css`)
        CONCAT(files, `${BUILD_DIR}/css/main-${PACKAGE.version}.css`)
    } else {
        FSE.copySync(`${SRC_DIR}/css/`, `${BUILD_DIR}/css/`)
    }
}

/* -------------------------------------------------------------------------- */

if (process.argv[2] != 'dev' && process.argv[2] != 'prod') {
    console.log('Usage: nodejs build.js <dev|prod>')
    process.exit(1)
}

process.env.NODE_ENV = process.argv[2]

checkFormat()
setup()
compileHTML()
compileJs()
copyStatic()
compileCSS()

//if (process.env.NODE_ENV === 'prod') {}
