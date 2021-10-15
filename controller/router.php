<?php
if (isset($_GET["section"])) {
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
      include("controller/choose-a-room-controller.php");
      break;
    case 'choose-a-spot':
      include("controller/choose-a-spot-controller.php");
      break;
    case 'choose-a-spot-cta':
      include("controller/choose-a-spot-cta-controller.php");
      break;
    case 'fail-spot':
      include("controller/fail-spot-controller.php");
      break;
    case 'success-spot':
      include("views/page/success-spot.php");
      break;

    default:
      echo "Cette page n'existe pas.";
      break;
  }
} else {
  include("controller/home-controller.php");
}
