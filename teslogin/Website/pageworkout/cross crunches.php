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
                    <h1>Cross Crunches</h1>
                    <div class="left"><img src="Crop/cross crunches.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Berbaringlah rata di atas matras dengan posisi tubuh Anda dalam garis lurus dari atas kepala Anda, turunkan tulang belakang Anda, dan ke tulang ekor Anda.
                       Kemudian letakkan tangan Anda di belakang kepala, siku keluar, Tarik napas saat Anda menyilangkan kaki kiri Anda di atas kanan Anda beristirahat pergelangan kaki kiri lutut kanan Anda.
                       Buang napas saat Anda mengencangkan otot perut dan perlahan-lahan angkat tubuh bagian atas dari tikar (mirip dengan crunch dasar).
                       Kemudian perlahan putar tubuh Anda ke kiri saat Anda menekan perut Anda, bawa siku kanan ke lutut kiri hingga menyentuh.
                       terakhir tarik napas saat Anda perlahan-lahan menurunkan tubuh bagian atas Anda kembali ke tikar.<br><br> Manfaatnya Otot-otot perut anda akan menjadi kuat dan dapat memperbaiki postur dan bahkan membantu mengelola, mengurangi, atau mencegah sakit punggung.</p>
                </div>
        </content>
</body>
</html>