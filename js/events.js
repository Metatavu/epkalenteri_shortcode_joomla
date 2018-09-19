jQuery(document).ready(function($) {
  var eventParams = $('.epkalenteri-events-list-container').attr('data-epkalenteri-params');
  $.ajax( 'index.php?option=com_ajax&plugin=Epkalenteri_events_ajax&method=Epkalenteri_events_ajax&format=json&params=' + eventParams )
  .success(function(results) {
    console.log(results);
    $('.epkalenteri-events-list-container').html(results.data[0].events);
  })
  .fail(function() {
    console.log('error');
  })
});