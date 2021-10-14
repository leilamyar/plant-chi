<?php 
  try {
    session_start();
    include("views/html/head.php");  
    // include("controller/menu-controller.php");
    include("controller/router.php");
    include("views/html/footer.php");
  } catch (Exception $e) {
    echo $e->getMessage();
  }  
?>