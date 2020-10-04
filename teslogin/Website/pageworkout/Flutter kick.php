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
                    <h1>Flutter Kick</h1>
                    <div class="left"><img src="Crop/Flutter kick.png" width="250" height="250" style="float: left;"></div>
                    <h4>&emsp;Cara :</h>
                    <p>Berbaring telentang dan rentangkan kaki hingga sudut 45 derajat. Jaga agar lengan Anda lurus dan sejajar dengan lantai, telapak tangan menghadap ke bawah. Angkat kepala, leher, dan bahu Anda sedikit dari tanah.
                       Kemudian jaga agar kaki Anda tetap lurus dan rekatkan dengan jari-jari kaki runcing, mulai turunkan satu kaki, Angkat kaki yang diturunkan dan turunkan yang lain, fokuslah untuk menjaga agar inti Anda tetap terhubung.
                       Seterusnya lanjutkan gerakan, bergantian di antara kedua kaki. <br><br> Manfaatnya akan meningkatkan bagian otot kaki, perut, dan beberapa bagian dada.</p>
                </div>
        </content>
</body>
</html>