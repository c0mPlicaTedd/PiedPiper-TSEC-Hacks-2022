<?php

if(isset($_POST["submit"])){

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    $email = $_POST["email"];
    $pwd = $_POST["password"];

    if(emptyInputLogin($email,$pwd) !== FALSE){
        header("location: ../login.html?error=emptyinput");
        exit();
    }


    loginUser($conn,$email,$pwd);

}
else{
    header("location: ../login.html");
    exit();
}