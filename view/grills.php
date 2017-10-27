<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrillBer - Home</title>
    <link rel="stylesheet" href="css/desktopMaster.css">
    <link rel="stylesheet" href="css/desktopTopBar.css">
    <link rel="stylesheet" href="css/desktopNavigation.css">
    <link rel="stylesheet" href="css/desktopJumboStylesheet.css">
    <link rel="stylesheet" href="css/desktopFonts.css">
    <link rel="stylesheet" href="css/desktopMainContent.css">
    <link rel="stylesheet" href="css/desktopGridViewProductList.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/jumboFunctions.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="targetBar">
        <div class="logo">
          <a href="index.php">
            <img id="targetBarLogo" src="img/grillber-logo.png" alt="GrillBer logo, a barbecue">
          </a>
          <a href="index.php"><h1 id="GrillBerTitle">GRILLBER </h1></a>
          <p id="underLogoText">Hire a grill today!</p>
        </div>
        <div class="search">
          <form class="searchBar" action="index.php" method="post">
            <input id="searchTextBox" type="text" name="searchText" value="" placeholder="Search Grillber">
            <input id="searchBarButton" type="submit" name="searchButton" value="">
          </form>
        </div>
        <div class="login">
          <a id="registerLink" href="index.php">Register</a>
          <a id="loginLink" href="index.php">Login</a>
        </div>
      </div>
      <div class="navigation">
        <div class="leftItems">
          <ul class="leftNavList">
            <li><a href="#">Grills</a></li>
            <li><a href="#">Garden Furniture</a></li>
            <li><a href="#">Turf</a></li>
          </ul>
        </div>
        <div class="middleItems">
          <ul class="middleNavList">
            <li id="firstMiddleItem"><a href="#">How it works</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <div class="basket">
          <a href="#">Basket</a>
        </div>
      </div>
    </div>
  </body>
</html>
