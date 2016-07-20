var GLM = GLM || {};


GLM.FacebookApi = {

  'init': function(callback) {
    $.getScript('//connect.facebook.net/en_US/sdk.js', function() {
			FB.init({
				version    : GLM.CONSTS.FACEBOOK.API_VERSION,
				appId      : GLM.CONSTS.FACEBOOK.APP_ID,
				xfbml      : true,
			});
      FB.getLoginStatus(function(response) {
        console.log('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>', response);
      });
      FB.Event.subscribe('xfbml.render', function() {
        console.log('>>>>>>>>>>>>>>>>>>>> plugins ready!');
      });
      callback();
    });
  }
};
