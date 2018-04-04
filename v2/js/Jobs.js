$(document).ready(function(){
  // $(".navbar").css('opacity', '0');
  //   $(".navbar").animate({
  //   opacity: 1
  // }, 1500, function() {
  //   opacity: .1
  // })

  $(".title").css('opacity', '0');
    $(".title").animate({
    opacity: 1
  }, 1500, function() {
    opacity: .1
  })

  $(".panel-default").css('opacity', '0');
    $(".panel-default").delay(500).animate({
    opacity: 1
  }, 1500, function() {
    opacity: .1
  })

  $(".panel-info").css('opacity', '0');
    $(".panel-info").delay(1000).animate({
    opacity: 1
  }, 1500, function() {
    opacity: .1
  })
});
