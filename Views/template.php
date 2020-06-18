<?php
if(isset($_GET['route'])){
  if(
    $_GET['route'] == "404front"      ||
    $_GET['route'] == "home"          ||
    $_GET['route'] == "click-page"
  ){
// Header frronti
    include("includes/frontheader.php");
    include("modules/".$_GET['route'].".php");
    include("includes/frontfooter.php");
// Footer
  }
  else if($_GET['route'] == "CMS"                       ||
          $_GET['route'] == "dashboard"                 ||
          $_GET['route'] == "users"                     ||
          $_GET['route'] == "posts"                     ||
          $_GET['route'] == "car-marks"                     ||
          $_GET['route'] == "advertisment"              ||
          $_GET['route'] == "profile"                   ||
          $_GET['route'] == "statistics"
  )
  {
    include("Views/includes/header.php");
    include("modules/CMS/".$_GET['route'].".php");
    include("Views/includes/footer.php");
  }
  else if($_GET['route'] == "user-dashboard"          ||
          $_GET['route'] == "add-car"                 ||
          $_GET['route'] == "add-autopart"            ||
          $_GET['route'] == "my-profile"                 ||
          $_GET['route'] == "index"                   ||
          $_GET['route'] == "edit-cars"               ||
          $_GET['route'] == "edit-autoparts"               
  )
  {
    include("Views/modules/user-dashboard/header.php");
    include("modules/user-dashboard/".$_GET['route'].".php");
    include("Views/modules/user-dashboard/footer.php");
  }
  else if($_GET['route'] == "Login"                   ||
          $_GET['route'] == "login"                   ||
          $_GET['route'] == "signup"                  ||
          $_GET['route'] == "forgotpassword"
  )
  {
    include("Views/modules/Login/frontheader.php");
    include("modules/Login/".$_GET['route'].".php");
    include("Views/modules/Login/frontfooter.php");
  }
  else{
    include("modules/CMS/404.php");
  }
}
else{

  include("includes/frontheader.php");
// include("modules/homepage.php");
  include("includes/frontfooter.php");
}
?>