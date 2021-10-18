<?php 

  session_start();
  ob_start();
  print_r($_SESSION);
  include("views/html/head.php");  
  // include("controller/menu-controller.php");
  include("controller/router.php");
  include("views/html/footer.php");
?>