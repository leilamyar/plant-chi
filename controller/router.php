<?php 
  if(isset($_GET["section"])) {
    switch ($_GET["section"]) {
      case 'home':
        include("views/page/home.php");
        break;
      case 'login':
        include("views/page/login.php");
        break;
        case 'choose-a-plant':
          include("views/page/choose-a-plant.php");
          break;
        case 'choose-a-room':
          include ("views/page/choose-a-room.php");
          break;
        case 'choose-a-spot':
          include("views/page/choose-a-spot.php");
          break;
          case 'fail-spot':
            include("views/page/fail-spot.php");
            break;

      default:
        echo "Cette page n'existe pas.";
        break;
    }
  } 
    else {
    include("views/page/home.php");
  }
?>