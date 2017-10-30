<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrillBer - Home</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/topBar.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/jumbo.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/mainContent.css">
    <link rel="stylesheet" href="css/gridViewProductList.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="../jquery-3.2.1.js"></script>
    <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.css">
    <script src="../jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="js/jumboFunctions.js"></script>
    <script src="js/singleProductFunctions.js"></script>
    <script src="js/mobileNavigation.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="targetBar">

        <div class="logo">
          <a href="index.php">
            <img id="targetBarLogo" src="img/grillber-logo.png" alt="GrillBer logo, a barbecue">
          </a>
          <a href="index.php"><h1 id="GrillBerTitle">GRILLBER </h1></a><br>
          <p id="underLogoText">Hire a grill today!</p>
        </div>

        <div class="hamburger">
          <div class="hamburgerLine" id="hamburgerTopLine"></div>
          <div class="hamburgerLine"></div>
          <div class="hamburgerLine"></div>
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

      <div class="mobileNavigation">

        <h4 class="mobileNavigationDropDownHeading" id="grillDropDownToggle">Grills</h4>
        <ul class="mobileGrillsDropDown">
          <a href="#"><li>All</li></a>
          <a href="#"><li>Gas</li></a>
          <a href="#"><li>Charcoal</li></a>
          <a href="#"><li>Electric</li></a>
        </ul>

        <h4 class="mobileNavigationDropDownHeading" id="gardenFurnitureDropDownToggle">Garden Furniture</h4>
        <ul class="mobileGardenFurnitureDropDown">
          <a href="#"><li>All</li></a>
          <a href="#"><li>Tables</li></a>
          <a href="#"><li>Seating</li></a>
          <a href="#"><li>Umbrellas</li></a>
          <a href="#"><li>Gazebos</li></a>
        </ul>

        <a href="#"><h4 class="mobileNavigationDropDownHeading">Turf</h4></a>

      </div>

      <div class="navigation">

        <div class="leftItems">
          <ul class="leftNavList">

            <li>
              <div class="NavDropDown">
                <a href="grills.php">Grills</a>
                <div class="NavDropDownContent">
                  <ul class="dropDownList">
                    <a href="#"><li id="topItem" class="dropDownItem">Gas</li></a>
                    <a href="#"><li class="dropDownItem">Charcoal</li></a>
                    <a href="#"><li class="dropDownItem">Electric</li></a>
                  </ul>
                </div>
              </div>
            </li>

            <li>
              <div class="NavDropDown">
                <a href="#">Garden Furniture</a>
                <div class="NavDropDownContent">
                  <ul class="dropDownList">
                    <a href="#"><li id="topItem" class="dropDownItem">Tables</li></a>
                    <a href="#"><li class="dropDownItem">Seating</li></a>
                    <a href="#"><li class="dropDownItem">Umbrellas</li></a>
                    <a href="#"><li class="dropDownItem">Gazebos</li></a>
                  </ul>
                </div>
              </div>
            </li>

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

      <div class="jumbo">
        <div class="sliderContainer">
          <div class="innerSliderContainer">
            <div class="slider1">
              <div class="translucentBox">

                <div class="leftSideSlider">
                  <h1>Multi-function Grill</h1>
                  <a href="#"><h1 class="jumboPrice">Price: £30</h1></a>
                </div>

                <div class="rightSideSlider">
                  <img class="jumboImage" src="img/example-grill-1.jpg">
                </div>

              </div>
            </div>
            <div class="slider2">
              <div class="translucentBox">

                <div class="leftSideSlider">
                  <h1>Example Grill 2</h1>
                  <a href="#"><h1 class="jumboPrice">Price: £20</h1></a>
                </div>

                <div class="rightSideSlider">
                  <img class="jumboImage" src="img/example-grill-2.jpg">
                </div>

              </div>
            </div>
            <div class="slider3">
              <div class="translucentBox">

                <div class="leftSideSlider">
                  <h1>Example Grill 3</h1>
                  <a href="#"><h1 class="jumboPrice">Price: £55</h1></a>
                </div>

                <div class="rightSideSlider">
                  <img class="jumboImage" src="img/example-grill-3.jpg">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mainContent">

        <div class="title">
          <h1>Popular Items</h1>
        </div>

        <div class="singleProduct">
          <div class="productPrice">
            <p id="price">£20</p>
            <p id="priceInterval">For the day</p>
          </div>
          <div class="productImageDiv">
            <img class="productImage" src="img/example-grill-1.jpg" alt="one of the grills">
          </div>
          <div class="quickInfoPseudo">
            <div id="1quickInfo" class="quickInfo">
              <p>Quick information 1 grill with more text and some more text and some more text and some more text and some more text and some more text and some more text and some more text and some more text and some more text and some more text and some more text and some more text and some more text.</p>
            </div>
          </div>
          <p id="1quickInfoHover" class="quickInfoHover">Quick Info</p>
          <div class="productDescription">
            <a href="#">Jumbuck 43cm Kettle Charcoal BBQ - Black<a>
          </div>
        </div>

        <div class="singleProduct">
          <div class="productPrice">
            <p id="price">£15</p>
            <p id="priceInterval">For the day</p>
          </div>
          <div class="productImageDiv">
            <img class="productImage" src="img/example-grill-2.jpg" alt="one of the grills">
          </div>
          <div class="quickInfoPseudo">
            <div id="2quickInfo" class="quickInfo">
              <p>Quick information 2 grill.</p>
            </div>
          </div>
          <p id="2quickInfoHover" class="quickInfoHover">Quick Info</p>
          <div class="productDescription">
            <a href="#">Jumbuck 43cm Kettle Charcoal BBQ - Black</a>
          </div>
        </div>

        <div class="singleProduct">
          <div class="productPrice">
            <p id="price">£25</p>
            <p id="priceInterval">For the day</p>
          </div>
          <div class="productImageDiv">
            <img class="productImage" src="img/example-grill-3.jpg" alt="one of the grills">
          </div>
          <div class="quickInfoPseudo">
            <div id="3quickInfo" class="quickInfo">
              <p>Quick information 3 grill.</p>
            </div>
          </div>
          <p id="3quickInfoHover" class="quickInfoHover">Quick Info</p>
          <div class="productDescription">
            <a href="#">Jumbuck 43cm Kettle Charcoal BBQ - Black</a>
          </div>
        </div>

        <div class="singleProduct">
          <div class="productPrice">
            <p id="price">£25</p>
            <p id="priceInterval">For the day</p>
          </div>
          <div class="productImageDiv">
            <img class="productImage" src="img/example-grill-4.jpg" alt="Jumbuck 43cm Kettle Charcoal BBQ - Black">
          </div>
          <div class="quickInfoPseudo">
            <div id="4quickInfo" class="quickInfo">
              <p>Quick information 4 grill.</p>
            </div>
          </div>
          <p id="4quickInfoHover" class="quickInfoHover">Quick Info</p>
          <div class="productDescription">
            <a href="#">Jumbuck 43cm Kettle Charcoal BBQ - Black</a>
          </div>
        </div>

        <div class="singleProduct">
          <div class="productPrice">
            <p id="price">£50</p>
            <p id="priceInterval">For the day</p>
          </div>
          <div class="productImageDiv">
            <img class="productImage" src="img/example-grill-5.jpg" alt="Char-Broil Performance T365 3 Burner with Side Burner Gas BBQ - Silver">
          </div>
          <div class="quickInfoPseudo">
            <div id="5quickInfo" class="quickInfo">
              <p>Quick information 5 grill.</p>
            </div>
          </div>
          <p id="5quickInfoHover" class="quickInfoHover">Quick Info</p>
          <div class="productDescription">
            <a href="#">Char-Broil Performance T365 3 Burner with Side Burner Gas BBQ - Silver</a>
          </div>
        </div>

        <div class="singleProduct">
          <div class="productPrice">
            <p id="price">£20</p>
            <p id="priceInterval">For the day</p>
          </div>
          <div class="productImageDiv">
            <img class="productImage" src="img/example-grill-6.jpg" alt="Traeger Bronson 20">
          </div>
          <div class="quickInfoPseudo">
            <div id="6quickInfo" class="quickInfo">
              <p>Quick information 6 grill.</p>
            </div>
          </div>
          <p id="6quickInfoHover" class="quickInfoHover">Quick Info</p>
          <div class="productDescription">
            <a href="#">Traeger Bronson 20</a>
          </div>
        </div>

      </div>

      <div class="footer">
        <p id="rightsText">&copy GrillBer 2017. All Rights Reserved</p>
      </div>

    </div>
  </body>
</html>
