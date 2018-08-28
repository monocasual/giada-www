var GLM = GLM || {};


$(document).ready(function() {
  if (typeof Cookies.get(GLM.CONSTS.PRIVACY_COOKIE) !== 'undefined') {
    $('.cookie-banner').hide();
  }
  else {
    $('.cookie-banner').show();
  }

  $('.cookie-banner__close').click(function() {
    Cookies.set(GLM.CONSTS.PRIVACY_COOKIE, true, { expires: 365 }); // one year
    $('.cookie-banner').hide();
  });
});
