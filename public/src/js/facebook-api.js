var glm_FacebookApi = {
  'init': function(callback) {
    $.getScript('//connect.facebook.net/en_US/sdk.js', function() {
			FB.init({
				version    : glm_consts.FACEBOOK_API_VERSION,
				appId      : glm_consts.FACEBOOK_APP_ID,
				xfbml      : true,
			});
      callback();
    });
  }
};
