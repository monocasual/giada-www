var PopUp = {

	'el_popup':      $('.glm-follow-us-popup'),
	'el_popupNope':  $('.glm-follow-us-popup__footer__nope'),
	'el_popupClose': $('.glm-follow-us-popup__header__close'),
	'el_iframe':     $('.glm-follow-us-popup iframe'),
	'cookie':        'glm-facebook-like',

	'toggle': function() {
		 this.el_popup.fadeToggle(200);
	},

	/* init */

	'init': function() {

		if (!this.hasCookieExpired()) {
			//console.log('cookie not expired, nothing to do');
			this.el_popup.hide();
			return;
		}

		var self = this;
		$.getScript('//connect.facebook.net/en_US/sdk.js', function() {
			FB.init({
				version    : 'v2.6',
				appId      : glm_consts.FACEBOOK_APP_ID,
				xfbml      : true,
			});

			self.isPageAlreadyLiked(
				function() { // yes
					//console.log('page already liked');
					self.el_popup.hide();
				},
				function() { // no
					//console.log('page not yet liked');
					self.bindSubscribeEvent();
					self.injectIframe();
					window.setTimeout(function() { self.toggle(); }, 1000); // 15 secs
				}
			);
		});

		this.el_popupNope.click(function(e) {
			self.close(e, 1, 'no facebook like, thanks');
		});
		this.el_popupClose.click(function(e) {
			self.close(e, 7, 'close facebook popup (x)');
		});
	},

	/* close */

	'close': function(event, cookieTime, eventMessage) {
		event.preventDefault();
		Cookies.set(this.cookie, true, { expires: cookieTime }); // one year
// @if ENVIRONMENT='prod'
		ga('send', {
			hitType: 'event',
			eventCategory: 'clicks - ' + eventMessage,
			eventAction: 'click'
		});
// @endif
		this.toggle();
	},

	/* hasCookieExpired */

	'hasCookieExpired': function() {
		return typeof Cookies.get(this.cookie) === 'undefined';
	},

	/* isPageAlreadyLiked */

	'isPageAlreadyLiked': function(cbYes, cbNo) {
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				var userAccessToken = response.authResponse.accessToken;
				FB.api(
					'/me/likes/' + glm_consts.FACEBOOK_PAGE_ID,
					{
						'access_token': userAccessToken
					},
					function(response) {
		  			if (response.data.length > 0) {  // liked!
							cbYes();
						}
						else {
							cbNo();
						}
					}
				);
			}
			else {
				cbNo();
			}
		});
	},

	/* bindSubscribeEvent */

	'bindSubscribeEvent': function() {
		var self = this;
		FB.Event.subscribe('edge.create', function() {  // like action
			Cookies.set(self.cookie, true, { expires: 365 }); // one year
// @if ENVIRONMENT='prod'
			ga('send', {
				hitType: 'event',
				eventCategory: 'clicks - facebook like',
				eventAction: 'click'
			});
// @endif
			self.toggle();
		});
	},

	/* injectIframe */

	'injectIframe': function() {
		(function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	}
};


/* -------------------------------------------------------------------------- */


$(document).ready(function() {

	PopUp.init();

});
