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
                    <h1>Squat</h1>
                    <div class="left"><img src="Crop/squat.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Berdiri menghadap ke depan dengan dada menghadap ke atas. Letakkan kaki selebar bahu atau sedikit lebih lebar. Rentangkan tangan Anda lurus di depan Anda untuk membantu menjaga keseimbangan Anda. Anda juga bisa memegang tangan setinggi dada atau meletakkannya di belakang kepala.
                        Tekuk lutut dan pinggul Anda, menjulurkan pantat seperti Anda sedang duduk di kursi imajiner. Jaga dada Anda terangkat dan tulang belakang Anda netral, dan jangan biarkan punggung bagian bawah Anda membulat.
                        Jongkok serendah mungkin, jaga kepala dan dada terangkat. Jaga lutut Anda di atas pergelangan kaki Anda dan tekan kembali berat badan Anda ke tumit Anda.
                        Jaga tubuh Anda kencang, dan dorong tumit Anda untuk membawa diri Anda kembali ke posisi awal. Ini adalah satu perwakilan.<br><br> Manfaatnya otot anda pada bagian pantat, dan paha akan semakin menonjol dan kuat.</p>
                </div>
        </content>
</body>
</html>