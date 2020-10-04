<?php
 session_start();
 include_once '../../includes/databaseuser.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styledietcrop.css">
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
                    <h1>Plan C</h1>
                    <div class="left"><img src="Crop/seimbang.png " width="250" height="250"></div><br>
                    <h3>Penjelasan:</h3>
                    <p>Dalam meyimbangkan asupan makanan anda, terlebih dahulu tahu apa yang di konsumsi dari daging, sayuran, buah dan asuan nutrisi lainnya. Untuk meyeimbangkan makanan yang di makan tidak terlalu sulit hanya mengfokuskan makanan yang di makan untuk tidak terlalu banyak pada satu jenis dan tidak terlalu sedikit. Kebanyakan dari peyeimbangan makanan begonsumsi beragam makanan dan porsi yang cukup untuk tubuh anda.    
                    </p>
                    <hr><h4>Karbohidrat = 30% </h4>
                    <p>Makanan yang di asupan karbohidrat harus di jaga dalam porsinya makanannya adalah <br>-Nasi <br>-Kentang <br>-Jagung  <br>Gandum <br><br>Asupan kabohidrat yang tidak di perbolekan tidak ada tetapi dalam menjaga kabohidrat tersebut dari porsi yang ada makan untuk tidak terlalu banyak <br><br> Jika anda megonsumsi kabohidrat yang berlebihan berat badan anda akan terus bertambah dan jika anda tidak olahraga untuk meyeimbangi nya anda malah akan merasa malas untuk bergerak.</p>
                    <hr><h4>Protein = 30%</h4>
                    <p>Makanan yang di perlukan pada asupan Protein keseluruhanya adalah daging, beberapa daging yang bagus untuk di konsumsi adalah<br>-Ayam <br>-Seafood <br>-Sapi <br><br>Dalam megonsumsi daging di harap kan jangan mengoreng dengan minyak lemak malah dengan minyak seperti minyak sawit atau dari minyak saitun lainya.  <br><br>Daging yang tidak perlu di konsumsi tetapi jika ingin di konsumsi anda harus menjaga porsi nya adalah <br>-Babi <br>-Makanan cepat saji <br>-Daging yang di deep fried. <br><br> Di karenakan jika mengonsumsi daging yang berlebihan minyak akan megakibatkan peningkatan lemak dan kolestrol tinggi pada tubuh anda.  </p>
                    <hr><h4>Lemak = 10% </h4>
                    <p>Dalam menjaga kesehatan tubuh anda lemak masih di perlukan dengan 10-12% di dalam tubuh anda untuk meyerap kadar vitamin untuk tubuh anda, jika kekurangan lemak juga dapat menurunkan energi dalam tubuh.</p>
                    <hr><h4>Sayur-sayuran dan Buah-buahan : 30%</h4>
                    <p>Dalam Sayuran dan buah-buahan tidak ada batas apa yang perlu di makan atau tidak di perboleh kan, hanya menjaga makanan untuk tidak terlalu banyak di konsumsi, untuk buah anda boleh memakan sebanyak yang anda mau berbagaimacam jenis buah apa pun, tetapi dalam buah jangan hanya memakan satu jenis buah saja.</p>
                <hr><h4>Saran :</h4>
                <p>Dalam menjaga berat badan anda harus rajin dalam berolahraga agar tubuh anda tetap memiliki siklus yang sehat dan menjaga pola makan anda dari apa yang di konsumsi dan berapa banyak, di haruskan untuk memantau berat badan anda, Memantau berat badan secara rutin agar sesuai dengan indeks massa tubuh dapat memberi sinyal apakah tubuh berada di indeks ideal atau tidak. 
                    Di haruskan untuk menghindari atau membatasi sesering mungkin dalam megonsumsi garam, gula, dan minyak.
                <br><br>Membiasakan perilaku hidup bersih dalam Pedoman Gizi Seimbang. Di akibatkan anda kemungkinan terkena penyakit yang dapat merusak sikus hidup sehat anda mungkin anda berpikir jika anda sudah sembuh anda akan kembali memiliki siklus kesehatan yang sempurna tetapi beberapa sel tubuh anda menjadi rusak.
                </p>
            </div>
        </content>
</body>
</html>