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
                    <h1>Plan A</h1>
                    <div class="left"><img src="Crop/sayuran dan daging.png " width="250" height="250"></div><br>
                    <h3>Penjelasan:</h3>
                    <p>Dalam menuruntkan berat badan anda harus megenali terlebih dahulu apa yang membuat badan anda menjadi gemuk dan penambahan lemak. Dari peningkatan kalori yang memakan makanan yang kurang bernutrisi atau tidak seimbang begakibatkan peningkatan kalori dan lemak menjadi tinggi di tambahnya tubuh anda yang kurang melakukan aktivitas.  
                    Dalam menuruntkan berat badan dengan diet yang perlu dilakukan adalah atur porsi makanan anda di bawa rata-rata sekitar 800 kalori kebawa untuk setiap hari, buat jadwal makan yang tepat dan sesuai dengan anda jagan sedikit pun tidak makan atau telat makan di jadwal makan anda, kurangi makanan gorengan, manisan, dan karbohidrat. Dari diet ini akan membantuk kelangsungan olahraga anda dalam menuruntkan berat badan anda di perhatikan dalam menuruntkan berat badan di haruskan untuk boleh olharaga saat sudah makan 4 jam sebelum olaharaga dan di perbolehkan makan sesudah olahraga saat 2 jam.    
                    </p>
                    <hr><h4>Karbohidrat = 10% </h4>
                    <p>Makanan yang di asupan karbohidrat sangat rendah tetapi masih memerlukan sedikit untuk membantu dalam olahraga anda jika tidak melakukan olahraga di haruskan untuk tidak mengkonsumsi sama sekali kabohidrat beberapa makanan kabohidrat yang boleh di makan adalah <br>-Nasi Merah <br>-Kentang <br><br>Asupan kabohidrat yang tidak di perbolekan adalah <br>-Nasi putih dengan jumlah banyak <br>-Pasta <br>-Mie  <br>-Dan asupan kabohidrat yang berlebih lainnya<br><br> Jika anda megonsumsi kabohidrat yang berlebihan berat badan anda akan terus bertambah dan dalam olahraga tidak akan megurangi kalori apa pun.</p>
                    <hr><h4>Protein = 40%</h4>
                    <p>Makanan yang di perlukan pada asupan Protein keseluruhanya adalah daging, beberapa daging yang bagus untuk menuruntkan berat badan adalah<br>-Ayam <br>-Ikan <br><br>Dalam Protein yang akan di konsumsi pada dasarnya daging tetapi daging yang di makan di sarankan untuk tidka di goreng malakali untuk di kukus atau di rebus, jangan menggunakan rempah-rempah yang berlebihan.  <br><br> Daging yang tidak diperbolekan untuk di konsumsi adalah <br>-Babi <br>-Makanan cepat saji <br>-Daging yang di goreng dengan minyak lemak <br>-Daging yang di deep fried. <br><br> Di karenakan jika mengonsumsi daging yang berlebihan minyak akan megakibatkan peningkatan lemak pada tubuh anda.  </p>
                    <hr><h4>Lemak = 0% </h4>
                    <p>Dalam menuruntkan berat badan di haruskan untuk tidak sama sekali megonsumsi makanan berlemak agar dalam menuruntkan berat badan anda di haruskan untuk megurangi kalori yang ada di dalam tubuh anda, jika masih ada lemak yang berkurang adalah lemak anda melainkan kalori anda tetapi jika lemak anda banyak di dalam tubuh anda anda bisa menggunakan lemak anda sendiri untuk energi dalam olahraga.</p>
                    <hr><h4>Sayur-sayuran dan Buah-buahan : 50%</h4>
                    <p>Makanan yang di perlukan pada sayuran dan buah adalah <br>-Brokoli <br>-Bayam <br>-Apel <br>-Buncis <br>-Dan Sayuran Rebus lainnya. <br><br> Dalam Sayuran dan buah-buahan akan memberikan nutrisi dan energi yang sesuai dengan tubuh anda dalam menuruntkan berat badan anda. <br>Dalam Sayuran dan Buah-buahan hampir semua di perboleh kan tetapi ada beberapa yang tidak boleh yaitu <br>-Buah Beri <br>-Cranberries <br><br>Beberapa buah beri tidak di perbolehkan di sebabakan membuat kadar air di dalam tubuh menjadi berkurang sehingga meyebabkan cepat merasa dehidrasi berlaku juga dalam diet lainnya.</p>
                <hr><h4>Saran :</h4>
                <p>Dalam menuruntkan berat badan anda harus menjaga apa yang anda makan karena 70% dalam menurutkan berat badan anda adalah dari apa yang anda konsumsi, jadinya olahraga hanya membantuk mengurangi lemak dalam tubuh anda dan sebenar nya dalam megurangi kalori dalam olahraga hanya membantu sedikit, dalam jadwal makanan tidak di haruskan sesuai dengan jadwal makan biasa anda melainkan membuat waktu yang pas untuk anda bisa makan, di haruskan makan pagi adalah buah dan sayur, saat makan siang anda boleh makan sebanyaknya tetapi di jaga apa anda makan, dalam makan malam di haruskan protein dan sayuran saja tetapi bisa di lakukan untuk tidak makan sama sekali saat malam.</p>
                </div>
        </content>
</body>
</html>