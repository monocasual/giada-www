var GLM = GLM || {};


GLM.FollowUsPopup = {

	'elems': {
		'popup':      $('.glm-follow-us-popup'),
		'popupOk':    $('.glm-follow-us-popup__body__ok'),
		'popupClose': $('.glm-follow-us-popup__header__close'),
		'popupNope':  $('.glm-follow-us-popup__footer__nope'),
		'popupLiked': $('.glm-follow-us-popup__footer__liked'),
	},

	'vars': {
		'cookieName':  'glm-facebook-like',
		'cookieTimeOk': 30,    // days
		'cookieTimeKo': 7,     // days
		'fadeoutTime':  200,   // ms
		'showupTime':   1,     // ms
	},

	/* init */

	'init': function() {

		if (!this.hasCookieExpired()) {
			this.elems.popup.hide();
			return;
		}

		GLM.FacebookApi.init();

		var self = this;
		this.elems.popupNope.click(function(e) {
			self.close(e, self.vars.cookieTimeKo, 'no facebook like, thanks');
		});
		this.elems.popupLiked.click(function(e) {
			self.close(e, self.vars.cookieTimeOk, 'facebook page already liked');
		});
		this.elems.popupClose.click(function(e) {
			self.close(e, self.vars.cookieTimeKo, 'close facebook popup (x)');
		});
		this.elems.popupOk.click(function(e) {
			self.bindSubscribeEvent();
		});

		/* TODO

		https://developers.facebook.com/docs/reference/javascript/FB.Event.subscribe/v2.7

		FB.Event.subscribe('edge.create', function() { console.log('like!'); });
		FB.Event.subscribe('edge.remove', function() { console.log('unlike!'); });
		*/

		window.setTimeout(function() { self.toggle(); }, self.vars.showupTime);
	},

	/* close */

	'close': function(event, cookieTime, eventMessage) {
		event.preventDefault();
		Cookies.set(this.vars.cookieName, true, { expires: cookieTime });
// @if ENVIRONMENT='prod'
		GLM.utils.sendAnalytics('clicks - ' + eventMessage, 'click');
// @endif
		this.toggle();
	},

	/* toggle */

	'toggle': function() {
		 this.elems.popup.fadeToggle(this.vars.fadeoutTime);
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
		this.toggle();
	},
};


/* -------------------------------------------------------------------------- */


$(document).ready(function() {
	GLM.FollowUsPopup.init();
});
