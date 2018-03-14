var GLM = GLM || {};


GLM.FacebookApi = {

  'init': function(callback) {
    $.getScript(GLM.CONSTS.FACEBOOK.SDK_URL, function() {
			FB.init({
				version    : GLM.CONSTS.FACEBOOK.API_VERSION,
				appId      : GLM.CONSTS.FACEBOOK.APP_ID,
				xfbml      : true,
			});
      FB.getLoginStatus(function(response) {
        //console.log('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>', response);
      });
      FB.Event.subscribe('xfbml.render', function() {
        //console.log('>>>>>>>>>>>>>>>>>>>> plugins ready!');
      });
      if (callback)
        callback();
    });
  }
};
