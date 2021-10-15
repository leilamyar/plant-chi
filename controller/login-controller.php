<?php 
    include("models/User.php");
    $msg="";
    if(isset($_POST["email"], $_POST["password"])){
        $connexionUser= new User();
        $user = $connexionUser->verify(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']));
        // TODO: change EMAIL by FIRSTNAME
        $_SESSION['email'] = $_POST["email"];
        // var_dump($_SESSION['email']);
        header("Location:?section=choose-a-plant");
        if($user != false){
            var_dump($user);
        }
        else{
            $msg = "<p style='color:red'>Invalid email or password.</p><div><a href='?section=login' class='btn'>START</a></div>";
        }
    }

    include("views/page/login.php");
?>