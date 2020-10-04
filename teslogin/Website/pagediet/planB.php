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
                    <h1>Plan B</h1>
                    <div class="left"><img src="Crop/muscle.png " width="250" height="250"></div><br>
                    <h3>Penjelasan:</h3>
                    <p>Dalam Peningkatan otot jumlah kalori yang dikonsumsi dilebihkan sekitar 500-1000 kkal/hari. Imbang energi positif ini diperlukan untuk pembentukan dan pertumbuhan masa otot. Namun harus diingat bahwa penambahan energi ini bukan berarti seseorang boleh makan secara rakus atau seenaknya karena kelebihan energi dari makanan tinggi lemak akan meningkatkan risiko peningkatan masa lemak melebihi masa otot.
                    Untuk Meningkatan masa otot di perlukan 3000 kalori perhari, dengan makan sayuran, buah-buahan, dan asupan protein. Rata-rata makanan yang perlu di konsumsi Makan secara teratur dalam 5-6 kali sehari</p>
                    <hr><h4>Karbohidrat = 20% </h4>
                    <p>Makanan yang di perlukan pada asupan karbohidrat adalah <br>-Nasi <br>-Kentang <br>-Roti Gluten Free <br>-Jagung <br>-Asupan kabohidrat kecil lainnya. <br><br> Pada kabohidrat akan membantu anda dalam memberi energi saat melakukan olahraga yang berat.<br><br>Asupan kabohidrat yang tidak di perbolekan adalah <br>-Pasta <br>-Mie  <br>-Dan asupan kabohidrat yang berlebih <br><br> Jika anda megonsumsi kabohidrat yang berlebihan masa otot akan menjadi berkurang dan peningkatan lemak bisa meningkat.</p>
                    <hr><h4>Protein = 40%</h4>
                    <p>Makanan yang di perlukan pada asupan Protein keseluruhanya adalah daging, beberapa daging yang bagus untuk peningkatan otot adalah<br>-Ayam <br>-Sapi <br>-Ikan <br><br>Dalam Protein yang akan membantu meningkatkan masa otot anda pada seluruh tubuh, Dalam megonsumsi protein di sarankan setiap igin makan harus ada setidak nya sekitar 100 gram daging dan daging tersebut harus di goreng dengan minyak sayur tidak boleh minyak lemak, kukus, dan rebus. Pengunan bumbu atau perasa di sarankan hanya menggunakan garam dan merica saja.  <br><br> Daging yang tidak diperbolekan untuk di konsumsi adalah <br>-Babi <br>-Makanan cepat saji <br>-Daging yang di goreng dengan minyak lemak <br>-Daging yang di deep fried. <br><br> Di karenakan jika mengonsumsi daging yang berlebihan minyak akan megakibatkan peningkatan lemak dari pada otot.  </p>
                    <hr><h4>Lemak = 10% </h4>
                    <p>Makanan yang sesuai dengan lemak hanya di perboleh kan beberapa saja di sebabkan lemak hanya membantu memberi sedikit energi dan membantu pembakaran kalori yang sedang, Tetapi di perbolehkan jika anda benar-benar tidak mau megonsumsi lemak sama sekali.</p>
                    <hr><h4>Sayur-sayuran dan Buah-buahan : 30%</h4>
                    <p>Makanan yang di perlukan pada sayuran dan buah adalah <br>-Kacang-kacangan <br>-Alpukat <br>-Buah Kering <br>-Buncis <br>-Dan Sayuran Rebus lainnya. <br><br> Dalam Sayuran ini ada memiliki beberapa kabohidrat dan vitamin yang pas untuk menjaga otot dan kulit saat proses perkembangan berat badan. <br>Dalam Sayuran dan Buah-buahan hampir semua di perboleh kan tetapi ada beberapa yang tidak boleh yaitu <br>-Buah Beri <br>-Cranberries <br><br>Beberapa buah beri tidak di perbolehkan di sebabakan membuat kadar air di dalam tubuh menjadi berkurang sehingga meyebabkan cepat merasa dehidrasi.</p>
                <hr><h4>Saran :</h4>
                <p>Dalam meningkatkan otot proses megonsumsi makanan harus banyak di sebabkan untuk menigkatkan berat badan dan perkembangan otot, dari sana proses olahraga yang akan membentuk badan ada. Di saran kan meminum banyak Air yang lebih dari rata-rata seperti minum 10 gelas setiap hari nya.
                Jika anda tidak tahan memakan makana seperti diet palan yang di berikan tentukan salah satu hari perminggu untuk bebas makan sesukanya tetapi jangan terlalu banyak.</p>
                </div>
        </content>
</body>
</html>