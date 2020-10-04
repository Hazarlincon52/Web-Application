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
                    <h1>Calf Raises </h1>
                    <div class="left"><img src="Crop/calf raises.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Gerakan ini akan menjadi lebih bagus lagi jika anda berdirilah di ujung anak tangga. Atau, jika Anda memiliki platform step-aerobik, letakkan dua set riser di bawah platform.
                        Berdirilah tegak dengan perut Anda ditarik, bola-bola kaki Anda tertanam kuat di anak tangga, dan tumit Anda tergantung di ujung.
                        Letakkan tangan Anda di dinding atau benda yang kokoh agar seimbang. Kemudian naikkan tumit Anda beberapa inci di atas ujung anak tangga agar Anda berjinjit. Tahan posisi itu sejenak, lalu turunkan tumit Anda di bawah platform, rasakan otot-otot betis Anda meregang.
                        <br><br> Manfaatnya dapat meningkatkan otot betis anda. Peringatan jika anda merasa sakit saat melakukannya berhenti sementara terlebih dahulu.</p>
                </div>
        </content>
</body>
</html>