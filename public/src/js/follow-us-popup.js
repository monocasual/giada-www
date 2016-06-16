$(document).ready(function() {
	
	var el_popup = $('.glm-follow-us-popup');
	var el_popupNope = $('.glm-follow-us-popup__footer__nope');
	
	/*
  if (typeof Cookies.get('glm-follow-us-popup') !== 'undefined') {
    el_popup.hide();
  }
  else {
		window.setTimeout(function() {
			el_popup.show();
			Cookies.set('glm-follow-us-popup', true, { expires: 1 });  // 1 day
		}, 30000);  // after 30 secs
  }
  */
  
  el_popupNope.click(function(e) {
		e.preventDefault();
		el_popup.hide();
	});
});
