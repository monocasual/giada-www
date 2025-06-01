var PRIVACY_COOKIE = {
    NAME: 'giadamusic-cookie-policy',
    DURATION: 365,
};
var CookieBanner = (function () {
    function CookieBanner() {
        this.el = document.querySelector('.cookie-banner');
        this.closeBtn = document.querySelector('.cookie-banner a.close');
    }
    CookieBanner.prototype.show = function () {
        this.el.style.display = 'block';
    };
    CookieBanner.prototype.hide = function () {
        this.el.style.display = 'none';
    };
    CookieBanner.prototype.onClose = function (f) {
        var _this = this;
        this.closeBtn.addEventListener('click', function (_) {
            f();
            _this.hide();
        });
    };
    return CookieBanner;
}());
var setCookie = function (name, value, days, path) {
    if (days === void 0) { days = 7; }
    if (path === void 0) { path = '/'; }
    var expires = new Date(Date.now() + days * 864e5).toUTCString();
    document.cookie = "".concat(name, "=").concat(encodeURIComponent(value), "; expires=").concat(expires, "; path=").concat(path);
};
var getCookie = function (name) {
    return document.cookie.split('; ').reduce(function (r, v) {
        var parts = v.split('=');
        return parts[0] === name ? decodeURIComponent(parts[1]) : r;
    }, '');
};
var hasCookie = function (name) {
    return getCookie(name) !== '';
};
document.addEventListener('DOMContentLoaded', function (_) {
    var cookieBanner = new CookieBanner();
    if (!hasCookie(PRIVACY_COOKIE.NAME))
        cookieBanner.show();
    cookieBanner.onClose(function () {
        return setCookie(PRIVACY_COOKIE.NAME, 'true', PRIVACY_COOKIE.DURATION);
    });
});
