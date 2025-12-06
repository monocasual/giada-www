const BUILD_DIR = `${__dirname}/docs`
const SRC_DIR = `${__dirname}/src`
const DATA_DIR = `${SRC_DIR}/data`
const CHANGES_FILE = `${DATA_DIR}/changes.html`

const CHILD_PROCESS = require('child_process')
const FSE = require('fs-extra')
const FS = require('fs')
const GLOB = require('glob')
const PUG = require('pug')
const CONCAT = require('concat')
const PATH = require('path')
const PACKAGE = require('./package.json')
const RELEASE = require(`${DATA_DIR}/release.json`)

const LINUX_PKG = `https://flathub.org/apps/com.giadamusic.Giada`
const WINDOWS_PKG = `https://github.com/monocasual/giada/releases/download/${RELEASE.version}/giada-${RELEASE.version}-x86_64-windows.zip`
const MACOS_PKG = `https://github.com/monocasual/giada/releases/download/${RELEASE.version}/giada-${RELEASE.version}-x86_64-macos.zip`
const SOURCE_PKG = `https://github.com/monocasual/giada/releases/download/${RELEASE.version}/giada-${RELEASE.version}-src.tar.gz`

/* -------------------------------------------------------------------------- */

function tryExecSync(cmd) {
    try {
        console.log(CHILD_PROCESS.execSync(cmd).toString())
    } catch (error) {
        console.error(error.stdout.toString())
        process.exit(1)
    }
}

function readChanges() {
    return FS.readFileSync(CHANGES_FILE, 'utf8')
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
        path: LINUX_PKG,
    }
    release.windows = {
        path: WINDOWS_PKG,
    }
    release.macos = {
        path: MACOS_PKG,
    }
    release.source = {
        path: SOURCE_PKG,
    }
    release.changes = readChanges()

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

    const imageFilter = (src, dest) => {
        return PATH.extname(src) !== '.xcf' // Don't copy .xcf (Gimp) files
    }

    FSE.mkdirsSync(`${BUILD_DIR}/images`)
    FSE.copySync(`${SRC_DIR}/images`, `${BUILD_DIR}/images`, imageFilter)

    console.log(`Copy CNAME`)
    FSE.copySync(`${SRC_DIR}/CNAME`, `${BUILD_DIR}/CNAME`)
}

function compileCSS() {
    console.log(`Compile CSS`)
    FSE.mkdirsSync(`${BUILD_DIR}/css`)
    const files = GLOB.sync(`${SRC_DIR}/css/*.css`)
    CONCAT(files, `${BUILD_DIR}/css/main-${PACKAGE.version}.css`)
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
