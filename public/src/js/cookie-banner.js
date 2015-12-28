$(document).ready(function() {
  if (typeof $.cookie.get('cookie-policy') !== 'undefined') {
    $('.cookie-banner').hide();
  }
  else {
    $('.cookie-banner').show();
  }

  $('.cookie-banner__close').click(function() {
    $.cookie.set('cookie-policy', true, { expires: 365 }); // one year
    $('.cookie-banner').hide();
  });
});
