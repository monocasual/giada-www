// @if ENVIRONMENT='prod'
$(document).ready(function() {
  $('a.see-it-in-action').click(function() {
    ga('send', {
      hitType: 'event',
      eventCategory: 'clicks - see Giada in action',
      eventAction: 'click'
    });
  });
});
// @endif
