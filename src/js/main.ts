class CookieBanner {
    el: HTMLElement
    closeBtn: HTMLElement

    constructor() {
        this.el = document.querySelector('.cookie-banner')
        this.closeBtn = document.querySelector('.cookie-banner a.close')
    }

    show(): void {
        this.el.style.display = 'block'
    }

    hide(): void {
        this.el.style.display = 'none'
    }

    onClose(f: () => void): void {
        this.closeBtn.addEventListener('click', (_) => {
            f()
            this.hide()
        })
    }
}

const setCookie = (name: string, value: string, days = 7, path = '/'): void => {
    const expires = new Date(Date.now() + days * 864e5).toUTCString()
    document.cookie = `${name}=${encodeURIComponent(
        value
    )}; expires=${expires}; path=${path}`
}

const getCookie = (name: string): string => {
    return document.cookie.split('; ').reduce((r, v) => {
        const parts = v.split('=')
        return parts[0] === name ? decodeURIComponent(parts[1]) : r
    }, '')
}

const hasCookie = (name: string): boolean => {
    return getCookie(name) !== ''
}

document.addEventListener('DOMContentLoaded', (_) => {
    const cookieBanner = new CookieBanner()

    if (!hasCookie(PRIVACY_COOKIE.NAME)) cookieBanner.show()

    cookieBanner.onClose(() =>
        setCookie(
            PRIVACY_COOKIE.NAME,
            /*value=*/ 'true',
            PRIVACY_COOKIE.DURATION
        )
    )
})
