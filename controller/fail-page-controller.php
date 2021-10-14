<?php 
    include("models/Sentences.php");
    $failCo= new Sentences();
    $sentence = $failCo->getSentenceRandom();
    include("views/page/fail-page.php");
?>