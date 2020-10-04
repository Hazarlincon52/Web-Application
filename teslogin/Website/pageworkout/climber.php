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
                    <h1>Climber</h1>
                    <div class="left"><img src="Crop/climber.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Masuk ke posisi Plank, pastikan untuk mendistribusikan berat Anda secara merata di antara tangan dan jari kaki Anda.
                       Kemudian periksa bentuk tubuh Anda dan kedua tangan Anda harus selebar bahu, punggung rata, perut diikat, dan kepala sejajar.
                       Kemudian Tarik lutut kanan ke dada sejauh yang Anda bisa. Kemudian beralih, tarik lutut itu keluar dan bawa lutut satunya lagi masuk.
                       Pertahankan pinggul Anda ke bawah, jalankan lutut masuk dan keluar sejauh dan secepat mungkin. Bergantian menghirup dan membuang dengan setiap perubahan kaki.<br><br> Manfaat nya climber bagus untuk membangun daya tahan cardio, kekuatan inti, dan ketangkasan.</p>
                </div>
        </content>
</body>
</html>