<?php
 session_start();
 include_once '../../includes/databaseuser.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleworkoutcorp.css">
    </head>
    <body>
    <header>
            <div class="box1">
            <div class="logo"><a href="../Main_Menu.php"><img src="../Picture/logo button.png" width="220" height="50"></div></a>
                <a href="../about.php" class="link"><button class="button1">Berada</button></a><a href="../workout.php"class="link"><button class="button1">Teknik Olahraga</button></a><a href="../diet.php"class="link"><button class="button1">Diet Plan</button></a>
                
                <?php
                if(isset($_SESSION ['userid'])){
                    echo '<div class="div1">'.$_SESSION['useruid'].'</div><form action="../../includes/logout.php" method="POST"><button type="submit" name="logout" class="login2">Logout</button></form>';
                
                }
                else {
                    echo'<a href="../../signup.php"><button class="button2">Sign Up</button></a><a href="../../database.php"><button class="button2">Login</button></a>';
                }
                ?>
           
            </div>
        </header>
        <content>
                <div class="Border"> 
                    <h1>Power Push Up</h1>
                    <div class="left"><img src="Crop/power pushup.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Letakkan tangan di lantai dengan posisi terbuka selebar bahu Anda. Kaki bertumpu pada ujung jari kaki Anda, hingga tubuh berposisi lurus sempurna. 
                        Jangan ada posisi atau bokong Anda menonjol ke atas. Turunkan bahu Anda sampai membentuk siku 90 derajat. Kemudian dorong bahu dan lengan anda sekuat mungkin hingga kedua tangan di udara. Lalu turun kembali dengan posisi tahan.<br><br>
                        Melakukan Power Push Up hampir sama dangan melakukan push up biasa hanya saja Power Push Up lebih kuat dan lebih sulit, Manfaatnya mempercepat peningkatan otot pada bagian lengan, dada, dan perut.</p>
                </div>
        </content>
</body>
</html>