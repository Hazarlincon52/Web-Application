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
                    <h1>Chest Expension</h1>
                    <div class="left"><img src="Crop/chest expension.png" width="350" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Berdirilah dengan kaki selebar bahu. Arah kan kedua tanggan ke depan dada berbentuk silang dengan mearahkan tangan kanan atau kiri dengan peyesuaian anda, lalu lakukan lebar setengah dengan kedua tangan anda sampai bagian dada terasa tertarik, lakukan kembali dari mearahkan tangan ke depan dada secara posisi terbalik, terakhir lebarkan tangan penuh sampai bagian dada tertarik.<br><br> Manfaatnya otot dada dan leher yang kuat, yang membalikkan Postur Bahu yang seimbang.</p>
                </div>
        </content>
</body>
</html>