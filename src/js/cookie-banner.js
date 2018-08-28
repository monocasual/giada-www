var GLM = GLM || {};


$(document).ready(function() {
  if (typeof Cookies.get(GLM.CONSTS.PRIVACY_COOKIE.NAME) !== 'undefined') {
    $('.cookie-banner').hide();
  }
  else {
    $('.cookie-banner').show();
  }

  $('.cookie-banner__close').click(function() {
    Cookies.set(
      GLM.CONSTS.PRIVACY_COOKIE.NAME, 
      true, // value
      { expires: GLM.CONSTS.PRIVACY_COOKIE.DURATION }
    );
    $('.cookie-banner').hide();
  });
});
