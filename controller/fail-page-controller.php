<?php 
    include("models/Sentences.php");
    //to include the model of the Sentences
    
    $failPage = new Sentences();//to create a new object
    $sentence = $failPage->getSentenceRandom();//the new object is the getSentenceRandom. When you're adding to the html, it will appear the sentence randomly that we have in the db. 
    include("views/page/fail-page.php");
?>