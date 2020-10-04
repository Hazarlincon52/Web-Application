<?php

if(isset($_post['signup'])){
    require 'databaseuser.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['psw'];
    $passwordrepeat = $_POST['psw-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordrepeat)){
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../signup.php?error=invalidmailuid");
        exit();    
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../signup.php?error=invalidmail&mail=".$email);
        exit();
    }
    else if($password !== $passwordrepeat){
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    else{
        $sql = "SELECT usersname  FROM users WHERE usersname=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt,"s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if($resultcheck > 0){
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else{ 
                $sql = "INSERT INTO users (usersname, email, pwd) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location ../signup.php?signup=success");
                }
            }    
        }
    }
    mysql_stmt_close($stmt);
    mysql_close($conn);
}
else{
    header("Location ../signup.php");
    exit();
}