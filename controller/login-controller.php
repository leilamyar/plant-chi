<?php 
    include("models/User.php");
    $msg="";
    session_destroy();

    if(isset($_POST["email"], $_POST["password"])){
        $connexionUser= new User();
        $user = $connexionUser->verify(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']));

        if($user != false){
            $_SESSION['email'] = $_POST["email"];
            header("Location:?section=choose-a-plant");
            var_dump($user);
        } else {
            header("Location:?section=wrong-credentials");
            $msg = "<p style='color:red'>Invalid email or password.</p><div><a href='?section=login' class='btn'>START</a></div>";
        }
        var_dump($msg);
    }

    include("views/page/login.php");
?>