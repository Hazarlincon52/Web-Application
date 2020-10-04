<?php


if(isset($_POST['login'])){
    require 'databaseuser.php';

    $mailuid = $_POST['name'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)){
        header("Location: ../database.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM firstusers WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../database.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt,"s",$mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdcheck = password_verify($password, $row['pwd']);
                if($pwdcheck == false){
                    header("Location: ../database.php?error=wrongpwd");
                    exit();
                }
                else if($pwdcheck == true){
                    session_start();
                    $_SESSION['userid'] = $row['idusers'];
                    $_SESSION['useruid'] = $row['username'];
                    header("Location: ../Website/Main_Menu.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../database.php?error=wrongpwd");
                    exit();
                }
            }
            else{
                header("Location: ../database.php?error=nouser");
                exit();
            }
        }
    }
}
else {
    header("Location ../database.php");
    exit();
}

?>

