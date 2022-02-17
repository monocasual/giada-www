var GLM = GLM || {};


GLM.FollowUsPopup = {

	'elems': {
		'popup':      $('.glm-follow-us-popup'),
		'popupOk':    $('.glm-follow-us-popup__body__ok, .glm-follow-us-popup__side, .glm-follow-us-popup__header'),
		'popupNope':  $('.glm-follow-us-popup__footer__nope')
	},

	'vars': {
		'cookieName':  'glm-instagram-follow',
		'cookieTimeOk': 60,    // days
		'cookieTimeKo': 14,    // days
		'fadeTime':     400,   // ms
// @if NODE_ENV='prod'
		'showupTime':   5000,  // ms
// @endif
// @if NODE_ENV='dev'
		'showupTime':   1,     // jshint ignore:line
// @endif
	},

	/* init */

	'init': function() {

// @if NODE_ENV='prod'
		if (!this.hasCookieExpired()) {
			this.elems.popup.hide();
			return;
		}
// @endif

		var self = this;
		this.elems.popupNope.click(function(e) {
			self.close(e, self.vars.cookieTimeKo, 'no instagram follow, thanks');
		});
		this.elems.popupOk.click(function(e) {
			self.bindSubscribeEvent();
		});

		window.setTimeout(function() { self.toggle(); }, self.vars.showupTime);
	},

	/* toggle */

	'toggle': function() {
		this.elems.popup.fadeToggle(this.vars.fadeTime);
	},

	/* hasCookieExpired */

	'hasCookieExpired': function() {
		return typeof Cookies.get(this.vars.cookieName) === 'undefined';
	},

	/* bindSubscribeEvent */

	'bindSubscribeEvent': function() {
		Cookies.set(this.vars.cookieName, true, { expires: this.vars.cookieTimeOK });
// @if NODE_ENV='prod'
		GLM.utils.sendAnalytics('clicks - instagram follow', 'click');
// @endif
    window.open(GLM.CONSTS.INSTAGRAM.PAGE_URL, '_blank');
		this.toggle();
	},

  /* close */

	'close': function(event, cookieTime, eventMessage) {
		event.preventDefault();
		Cookies.set(this.vars.cookieName, true, { expires: cookieTime });
// @if NODE_ENV='prod'
		GLM.utils.sendAnalytics('clicks - ' + eventMessage, 'click');
// @endif
		this.toggle();
	}
};


/* -------------------------------------------------------------------------- */


$(document).ready(function() {
	GLM.FollowUsPopup.init();
});
