<?php
 session_start();
 include_once '../includes/databaseuser.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylecalculate.css">
    </head>
    <body>
    <header>
            <div class="box1">
            <div class="logo"><a href="Main_Menu.php"><img src="Picture/logo button.png" width="200" height="50"></div></a>
                <a href="about.php" class="link"><button class="button1">About</button></a><a href="calculate.php"class="link"><button class="button1">Calculate</button></a><a href="workout.php"class="link"><button class="button1">Workout</button></a><a href="diet.php"class="link"><button class="button1">Diet</button></a>
                
                <?php
                if(isset($_SESSION ['userid'])){
                    echo '<div class="div1">'.$_SESSION['useruid'].'</div><form action="../includes/logout.php" method="POST"><button type="submit" name="logout" class="login2">Logout</button></form>';
                
                }
                else {
                    echo'<a href="../signup.php"><button class="button2">Sign Up</button></a><a href="../database.php"><button class="button2">Login</button></a>';
                }
                ?>
           
            </div>
        </header>
        <h1>calculate</h1>
<a href="Main_Menu.php">Back</a>
    </body>
</html>