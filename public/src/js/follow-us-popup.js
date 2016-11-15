var GLM = GLM || {};


GLM.FollowUsPopup = {

	'elems': {
		'popup':      $('.glm-follow-us-popup'),
		'popupOk':    $('.glm-follow-us-popup__body__ok, \
      .glm-follow-us-popup__side, .glm-follow-us-popup__header'),
		'popupNope':  $('.glm-follow-us-popup__footer__nope')
	},

	'vars': {
		'cookieName':  'glm-facebook-like',
		'cookieTimeOk': 60,    // days
		'cookieTimeKo': 14,    // days
		'fadeTime':     400,   // ms
// @if ENVIRONMENT='prod'
		'showupTime':   15000, // ms
// @endif
// @if ENVIRONMENT='dev'
		'showupTime':   1,     // ms
// @endif
	},

	/* init */

	'init': function() {

// @if ENVIRONMENT='prod'
		if (!this.hasCookieExpired()) {
			this.elems.popup.hide();
			return;
		}
// @endif

		GLM.FacebookApi.init();

		var self = this;
		this.elems.popupNope.click(function(e) {
			self.close(e, self.vars.cookieTimeKo, 'no facebook like, thanks');
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
// @if ENVIRONMENT='prod'
		GLM.utils.sendAnalytics('clicks - facebook like', 'click');
// @endif
    window.open(GLM.CONSTS.FACEBOOK.PAGE_URL, '_blank');
		this.toggle();
	},

  /* close */

	'close': function(event, cookieTime, eventMessage) {
		event.preventDefault();
		Cookies.set(this.vars.cookieName, true, { expires: cookieTime });
// @if ENVIRONMENT='prod'
		GLM.utils.sendAnalytics('clicks - ' + eventMessage, 'click');
// @endif
		this.toggle();
	}
};


/* -------------------------------------------------------------------------- */


$(document).ready(function() {
	GLM.FollowUsPopup.init();
});
