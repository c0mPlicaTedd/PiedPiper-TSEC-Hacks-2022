<?php

function emptyInputRegister($email,$pwd){
    $result = FALSE;

    if(empty($email) || empty($pwd)){
        $result = TRUE;
    }
    else{
        $result = FALSE;
    }
   return $result;

}

function invalidEmail($email){
    $result = FALSE;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = TRUE;
    }
    else{
        $result = FALSE;
    }
   return $result;
}

function emailExists($conn,$email){
   $sql = "SELECT * FROM users WHERE usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);

   if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../signup.html?error=stmtfailed");
    exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $result = FALSE;

   if($row = mysqli_fetch_assoc($resultData)){
     return $row;
   }

   else{
       $result = FALSE;
       return $result;
   }

}

function  createUser($conn,$email,$pwd){
    $sql = "INSERT INTO users (usersEmail,usersPwd) VALUES(?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.html?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ss",$email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.html?error=none");
    exit();

}


function emptyInputLogin($email,$pwd){
    $result = FALSE;

    if(empty($email) || empty($pwd)){
        $result = TRUE;
    }
    else{
        $result = FALSE;
    }
   return $result;

}

function loginUser($conn,$email,$pwd){
    $emailExists = emailExists($conn,$email);

    if($emailExists == FALSE){
        header("location: ../login.html?error=incorrectdetails");
        exit();
    }
    
    $pwdHashed = $emailExists["usersPwd"];
    $checkPwd = password_verify($pwd,$pwdHashed);

    if($checkPwd == FALSE){
        header("location: ../login.html?error=incorrectdetails");
        exit();

    }

    else if($checkPwd == TRUE){
        session_start();
        $_SESSION["usersEmail"] = $emailExists["usersEmail"];
        if($_SESSION["usersEmail"]=="jashdoshi99@gmail.com"){
        header("location: ../admin.html");}
        else if($_SESSION["usersEmail"]=="chetanabhojwani@gmail.com"){
            header("location: ../homepage.html");
        }
        exit();
    }
}

function logoutUser(){

}