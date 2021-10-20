<?php 
  if(isset($_GET["section"])) {
    switch ($_GET["section"]) {
      case 'home':
        include("controller/home-controller.php");
        break;
      case 'login':
        include("controller/login-controller.php");
        break;
      case 'choose-a-plant':
        include("controller/choose-a-plant-controller.php");
        break;
      case 'choose-a-room':
        include ("controller/choose-a-room-controller.php");
        break;
      case 'choose-a-spot':
        include("views/page/choose-a-spot.php");
        break;
      case 'choose-a-spot-cta':
        include("controller/choose-a-spot-cta-controller.php");
        break;  
      case 'fail-page':
          include("controller/fail-page-controller.php");
          break;
      case 'success-spot':
          include("views/page/success-spot.php");
          break;
      case 'tuto-water-part':
        include("controller/tuto-water-part-controller.php");
        break;

    default:
      echo "Cette page n'existe pas.";
      break;
  }
} else {
  include("controller/home-controller.php");
}
