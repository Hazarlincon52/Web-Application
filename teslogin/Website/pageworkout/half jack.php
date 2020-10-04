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
                    <h1>Half Jack</h1>
                    <div class="left"><img src="Crop/half jack.png  " width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Gerakan Half Jack mirip dengan Half Jack. Mulailah dengan berdiri dengan tangan di samping dan kaki Anda dengan punggung lurus. Melompat dan rentangkan kaki dan tangan Anda, mendarat dengan kaki sedikit lebih lebar dari lebar bahu dan lengan lurus ke atas setinggi bahu. Lompat lagi untuk menyatukan kaki Anda dan lengan Anda ke bawah. Posisi lengan adalah perbedaan utama antara jack standar dan setengah; pada jack standar, Anda mengangkat lengan ke atas kepala sampai menyentuh.
                    <br><br>Manfaatnya meningkatkan otot kaki dan bagus untuk olahraga menuruntkan kalori.</p>
                </div>
        </content>
</body>
</html>