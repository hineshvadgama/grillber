$(document).ready(function(){

  var position = 1;

  window.setInterval(function() {
    var leftPos = $('.sliderContainer').scrollLeft();
    var width = $(".slider1").width();
    $(".sliderContainer").animate({scrollLeft: leftPos + width}, 500);
    if (position != 3) {
      position = position + 1;
    } else {
      position = 1;
      $(".sliderContainer").animate({scrollLeft: 0},500);
    }
  }, 4000);

});

/*
$("#leftArrow").click(function(){
  var leftPos = $('.sliderContainer').scrollLeft();
  var width = $(".slider1").width();
  $(".sliderContainer").animate({scrollLeft: leftPos - width}, 500);
  if (position != 1) {
    position = position - 1;
  } else {
    position = position;
  }
});

$("#rightArrow").click(function(){
  var leftPos = $('.sliderContainer').scrollLeft();
  var width = $(".slider1").width();
  $(".sliderContainer").animate({scrollLeft: leftPos + width}, 500);
  if (position != 3) {
    position = position + 1;
  } else {
    position = 1;
    $(".sliderContainer").animate({scrollLeft: 0},500);
  }
});
*/
