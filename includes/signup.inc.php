<?php

if(isset($_POST["submit"])){

    require_once "dbh.inc.php";
    require_once "functions.inc.php";

    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $referral = $_POST["referral"];

    if(emptyInputRegister($email,$pwd) !== FALSE){
        header("location: ../signup.html?error=emptyinput");
        exit();
    }

    if(emailExists($conn,$email) !== FALSE){
        header("location: ../signup.html?error=emailexists");
        exit();
    }
    if(invalidEmail($email) !== FALSE){
        header("location: ../signup.html?error=invalidemail");
        exit();
    }


    createUser($conn,$email,$pwd);

}
else{
    header("location: ../signup.html");
    exit();
}