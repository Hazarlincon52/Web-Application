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
                    <h1>Wall Sit</h1>
                    <div class="left"><img src="Crop/wall sit.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Mulailah dengan punggung bersandar ke dinding dengan kaki selebar bahu dan sekitar 2 kaki dari dinding. Libatkan otot perut Anda dan perlahan-lahan geser punggung Anda ke bawah dinding sampai paha Anda sejajar dengan tanah.
                        Sesuaikan kaki Anda sehingga lutut Anda berada tepat di atas pergelangan kaki Anda (bukan di atas jari kaki). Jaga agar punggung Anda rata di dinding.
                        Tahan posisi selama 20 hingga 60 detik paling maksimal. Geser perlahan ke atas dinding ke posisi berdiri. <br><br> Manfaatnya mengisolasi otot-otot paha depan bagian depan paha Anda, dan meningkat kan daya tahan kaki anda saat berlari atau mendaki.</p>
                </div>
        </content>
</body>
</html>