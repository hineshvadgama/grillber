$(document).ready(function() {

  $(".hamburger").click(function(){
    $(".mobileNavigation").slideToggle("fast");
  })

  $("#grillDropDownToggle").click(function(){
    $(".mobileGrillsDropDown").slideToggle("fast", function(){
      if($(".mobileGrillsDropDown").is(":hidden")) {
        $("#grillDropDownArrow").css({
          'border-bottom': 'none',
          'border-top': '10px solid black'
        });
      } else {
        $("#grillDropDownArrow").css({
          'border-bottom': '10px solid black',
          'border-top': 'none'
        });
      }
    });
  });

  $("#gardenFurnitureDropDownToggle").click(function(){
    $(".mobileGardenFurnitureDropDown").slideToggle("fast", function(){
      if($(".mobileGardenFurnitureDropDown").is(":hidden")) {
        $("#gardenFurnitureDropDownArrow").css({
          'border-bottom': 'none',
          'border-top': '10px solid black'
        });
      } else {
        $("#gardenFurnitureDropDownArrow").css({
          'border-bottom': '10px solid black',
          'border-top': 'none'
        });
      }
    });
  });

});
