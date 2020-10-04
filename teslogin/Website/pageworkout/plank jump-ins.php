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
                    <h1>Plank Jump-Ins</h1>
                    <div class="left"><img src="Crop/plank jump-ins.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Berbaringlah di lantai menghadap ke bawah. Angkat tubuh Anda dengan tangan diluruskan dan telapak tangan diletakkan rata di lantai. Rentangkan jari Anda. sejajarkan mereka sekarang dengan bahu Anda.
                        Angkat jari kaki dan rentangkan kaki seperti sepasang pensil. Anda harus merasakan bagian dari berat badan Anda bertumpu pada jari kaki.
                         Persiapkan diri Anda untuk lompatan. Lakukan dengan melibatkan inti Anda. Dan untuk itu, kencangkan.
                        Sekarang lompat ke arah tangan Anda, mendarat di posisi seperti katak yang diilustrasikan pada gambar di atas. Ingatlah untuk memegang tangan Anda ke lantai. Tahan di sana sebentar.
                        Lompat kembali ke posisi awal.<br><br> Manfaatnya akan meningkat kan otot bagian inti perut, Quads, Glutes, Punggung bawah, Fleksor Pinggul Depan. Jika tidak di lakukan dengan benar inti perut tidak akan terbentuk.</p>
                </div>
        </content>
</body>
</html>