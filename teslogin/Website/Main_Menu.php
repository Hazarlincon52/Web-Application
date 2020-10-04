<?php
 session_start();
 include_once '../includes/databaseuser.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylemenu.css">
    </head>
    <body >
        <header>
            <div class="box1">
            <div class="logo">
           
                <a href="Main_Menu.php"><img src="Picture/logo button.png" alt="Snow" width="220" height="50"></a></div>
                
                
                <a href="about.php" class="link"><button class="button1">Beranda</button></a><a href="workout.php"class="link"><button class="button1">Teknik Olahraga</button></a><a href="diet.php"class="link"><button class="button1">Diet Plan</button></a>
                
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
        <content>
        <div class="container">
            <div class="menuimage"> <img src="Picture/Background menu.png" width="1536" height="350"></div>
            <div class="centered">Hidup Sehat Di Dalam Rumah Anda<br> "Mulai Melakukan Test Olahraga Gratis"</div>
            </div>
            <div class="isi">
            <p>Lakukan Test untuk mendapatkan cara sehat yang sesuai dengan tubuh anda, dari Olahraga dan penjagaan konsumsi makanan.</p>
            
            <?php 
           if(isset($_SESSION ['userid'])){
            echo '<div class="center"><a href="start.php"><button class="button3">Test</button></a></div>';
           }
            else {
                echo '<div class="center"><button class="button3" onclick="myFunction()">Test</button></div>
                <h2 id="demo"> </h2>
            <script>
                function myFunction() {
                    document.getElementById("demo").innerHTML = "&emsp; Login Terlebih dahulu";
            }
            </script>';
            }
            ?>
            </div>
            
            
        </content>
    </body>
</html>