<?php
 session_start();
 include_once '../includes/databaseuser.php';
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/styleabout.css">
    </head>
    <body>
    <header>
            <div class="box1">
            <div class="logo">
                <a href="Main_Menu.php"><img src="Picture/logo button.png" width="220" height="50"></div></a>
                <a href="about.php" class="link"><button class="button1">Beranda</button></a><a href="workout.php"class="link"><button class="button1">Teknik Olahraga</button></a><a href="diet.php"class="link"><button class="button1">Diet Plan</button></a>
                
                <?php
                if(isset($_SESSION ['userid'])){
                    echo '<div class="div1">'.$_SESSION['useruid'].'</div><form action="../includes/logout.php" method="POST"><button type="submit" name="logout" class="login2">Logout</button></form>';
                
                }
                else {
                    echo'<a href="../signup.php"><button class="button2">Sign Up</button></a><a href="../database.php"><button class="button2">Login</button></a>';
                }
                ?>
           
            </div>
        </header>
        <content>
            <div class="size1"><img src="Picture/logo.png" width="310" height="300"></div>
            <div class="line">
           
            <p><b>Home Workout Adalah Web Application yang dapat membantu anda dalam menjaga kebugaran tubuh di dalam lingkungan rumah</b></p> 
                <p><b>secara semudah mungkin.</b></p>
            </div>
            <hr class="hr1">
            <div class="line1">
            <div class="picture1"><img src="Picture/line1.png"width="410" height="320"></div><p class="p1">Pola hidup sehat merupakan kebiasaan bersifat dominan yang biasanya dilakukan setiap hari oleh seluruh orang di dunia, baik lingkungan keluarga/rumah, lingkungan sekolah, mapupun lingkungan masyarakat. Pola hidup sehat merupakan suatu kebiasaan pada manusia yang sudah ditanamkan sejak usia kecil sampai dengan usia lanjut.</p></div>
            <hr class="hr2">
            <div class="line2">
            <p class="p2">Pola hidup sehat yang sedang dijalani semua orang yaitu seperti rutin dalam berolahraga, makan-makanan yang bergizi dan seimbang, mengatur pola makan atau diet, dan lain sebagainya.</p><div class="picture2"><img src="Picture/line2.png"width="410" height="320"></div></div>
            <hr class="hr3">
            <div class="line3">
            <div class="picture3"><img src="Picture/line3.png"width="410" height="320"></div><p class="p3">Seperti halnya kesehatan manusia sangat bergantung pada betapa seringnya orang-orang tidak berolahraga atau mengonsumsi makanan bergizi seimbang dalam kehidupan sehari-harinya hingga usia tua.</p></div>
            <hr class="hr2">
            <div class="line4">
            <p class="p4">Oleh karena itu, kami menciptakan aplikasi yang bergerak dalam kegiatan menjaga pola hidup sehat melalui rutinitas olahraga. Aplikasi tersebut bertujuan supaya user dapat lebih mengerti lagi untuk menjaga kesehatan tubuh dan mengatur jadwal berolahraga serta mengatur rencana diet atau pola makan yang harus disesuaikan.</p><div class="picture4"><img src="Picture/line4.png"width="410" height="320"></div></div>
            </div>
        </content>
    </body>
</html>