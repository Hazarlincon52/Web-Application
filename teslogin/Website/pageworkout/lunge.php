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
                    <h1>Lunge</h1>
                    <div class="left"><img src="Crop/lunge.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Berdiri tegak dengan kaki selebar pinggul. Libatkan inti Anda. Kemudian ambil langkah besar ke depan dengan kaki kanan. Mulailah menggeser berat badan Anda ke depan sehingga tumit menyentuh lantai terlebih dahulu.
                       Turunkan tubuh Anda sampai paha kanan sejajar dengan lantai dan tulang kering kanan vertikal. <br><br>Tidak apa-apa jika lutut bergeser sedikit ke depan asalkan tidak melewati jari kaki kanan. Jika mobilitas memungkinkan, ketuk ringan lutut kiri ke lantai sambil menjaga berat badan di tumit kanan.
                       Tekan ke tumit kanan untuk mendorong kembali ke posisi awal. dan Ulangi di sisi lain. <br><br> Manfaatnya dapat meningkatkan otot paha dan kaki. Juga dapat menigkatkan daya tahan otot.</p>
                </div>
        </content>
</body>
</html>