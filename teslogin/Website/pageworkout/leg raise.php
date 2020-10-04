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
                    <h1>Leg Raises</h1>
                    <div class="left"><img src="Crop/leg raise.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Berbaring di atas tikar atau di lantai, menghadap ke atas, kaki menjulur. Kemudian letakkan tangan Anda di bawah punggung bagian bawah dan glutes sehingga pinggul Anda didukung. setelah posisi tubuh sudah benar mulailah mengangkat kaki Anda ke langit-langit, menekan kedua paha Anda bersama-sama dan menjaga kaki tetap lurus. Angkat sampai pinggul Anda sepenuhnya tertekuk dan Anda tidak bisa naik lebih tinggi dengan kaki lurus, lalu turunkan kembali ke bawah dan ulangi.
                    <br><br> Manfaatnya bagian otot inti perut, paha, dan panggul akan terasa kencang. dan juga bagus untuk kardio perut.</p>
                </div>
        </content>
</body>
</html>