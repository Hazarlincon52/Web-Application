<?php
  session_start();
?>
<html>
<head>
    <title>
    Login   
    </title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<h1>Login</h1>
    <div class="border">
    <?php 
        if(isset($_SESSION ['userid'])){
            echo'<form action="includes/logout.php" method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>';
        }
        else {
            echo'<form action="includes/login.php" method="POST">
            <label for="fname" class="label"><b>&emsp;Username : </b><input type="text" placeholder="Username" name="name" class="field1"><br><br>
            <label for="fpassword" class="label"><b>&emsp;Password : </b><input type="Password"  placeholder="Password" name="pwd" class="field2">
            <button type="submit" name="login" class="button1">Login</button>
        </form>';
        
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields"){
                echo '<p> Isi semua fileds!</p>';
            }
            else if($_GET["error"] == "wrongpwd"){
                echo '<p>Password tidak sesuai!</p>';
            }
            else if ($_GET["error"] == "nouser") {
                echo '<p> Username tidak sesuai!</p>';
            }
        }
        else{
            echo'';
        }
        }
    ?>
    </div>


</body>

</html>