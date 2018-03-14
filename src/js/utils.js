var GLM = GLM || {};


GLM.utils = {

  /* sendAnalytics ---------------------------------------------------------- */

  'sendAnalytics': function(category, action) {
		ga('send', {
			'hitType':       'event',
      'eventCategory': category,
			'eventAction':   action
		});
  }
};
