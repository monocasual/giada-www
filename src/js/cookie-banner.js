$(document).ready(function() {
  if (typeof Cookies.get('cookie-policy') !== 'undefined') {
    $('.cookie-banner').hide();
  }
  else {
    $('.cookie-banner').show();
  }

  $('.cookie-banner__close').click(function() {
    Cookies.set('cookie-policy-2018', true, { expires: 365 }); // one year
    $('.cookie-banner').hide();
  });
});
