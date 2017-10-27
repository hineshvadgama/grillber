$(document).ready(function(){

  $('#1quickInfo').hide();
  $('#2quickInfo').hide();
  $('#3quickInfo').hide();
  $('#4quickInfo').hide();
  $('#5quickInfo').hide();
  $('#6quickInfo').hide();

  $('#1quickInfoHover').hover(function(){
    $('#1quickInfo').show('slide', { direction: "down" }, 300);
  },function(){
    $('#1quickInfo').hide('slide', { direction: "down" }, 300);
  });

  $('#2quickInfoHover').hover(function(){
    $('#2quickInfo').show('slide', { direction: "down" }, 300);
  },function(){
    $('#2quickInfo').hide('slide', { direction: "down" }, 300);
  });

  $('#3quickInfoHover').hover(function(){
    $('#3quickInfo').show('slide', { direction: "down" }, 300);
  },function(){
    $('#3quickInfo').hide('slide', { direction: "down" }, 300);
  });

  $('#4quickInfoHover').hover(function(){
    $('#4quickInfo').show('slide', { direction: "down" }, 300);
  },function(){
    $('#4quickInfo').hide('slide', { direction: "down" }, 300);
  });

  $('#5quickInfoHover').hover(function(){
    $('#5quickInfo').show('slide', { direction: "down" }, 300);
  },function(){
    $('#5quickInfo').hide('slide', { direction: "down" }, 300);
  });

  $('#6quickInfoHover').hover(function(){
    $('#6quickInfo').show('slide', { direction: "down" }, 300);
  },function(){
    $('#6quickInfo').hide('slide', { direction: "down" }, 300);
  });

});
