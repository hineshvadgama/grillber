$(document).ready(function() {

  $(".hamburger").click(function(){
    $(".mobileNavigation").slideToggle("fast");
  })

  $("#grillDropDownToggle").click(function(){
    $(".mobileGrillsDropDown").slideToggle("fast");
  });

  $("#gardenFurnitureDropDownToggle").click(function(){
    $(".mobileGardenFurnitureDropDown").slideToggle("fast");
  });

});
