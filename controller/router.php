<?php 

$_SESSION["name"] = 'leila';

if(isset($_GET["section"])) {
  if(isset($_SESSION["name"])) {
    switch ($_GET["section"]) {
          case 'choose-a-plant':
            include("controller/choose-a-plant-controller.php");
            break;
            case 'choose-a-room':
              include ("controller/choose-a-room-controller.php");
            break;
            case 'choose-a-spot':
              include("views/page/choose-a-spot.php");
              break;
              case 'fail-spot':
                include("controller/fail-spot-controller.php");
                break;
                case 'success-spot':
                  include("views/page/success-spot.php");
                  break;
                  case 'login':
                    include("controller/login-controller.php");
                    break;
                    
                    default:
                    echo "Cette page n'existe pas.";
                    break;
                  } // end switch
                } else { // else, if no section
                  
                  include("controller/home-controller.php");
                }
              } else { // else, if no SESSION name
                switch ($_GET["section"]) {
                  case 'home':
                    include("controller/home-controller.php");
                    break;
                    default:
                    echo "Cette page n'existe pas.";
                    break;
                  } // end switch no section
                }  
                ?>