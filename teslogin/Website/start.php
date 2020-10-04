<?php
 session_start();
 include_once '../includes/databaseuser.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylestart.css">
        <script src="javascript/dapat.js"></script>
    </head>
    <body >
        <header>
            <div class="box1">
            <div class="logo">
                <a href="Main_Menu.php"><img src="Picture/logo button.png" width="220" height="50"></a></div>
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
            <div class="Border">
            <div class="pres"><h1 font size="50">Test</h1></div>
            <hr>
            <label for="fhome" class="label"><b>&emsp;Lingkungan Rumah : </b>
            <select name="home" id="home" class="field1">
                <option value="Apartment">Apartment</option>
                <option value="Rumah Ruko">Rumah Ruko</option>
                <option value="Rumah Satu Tingkat">Rumah Satu Tingkat</option>
            </select><br><br>
            <label for="fweight"><b>&emsp;Berat Badan :</b></label>
            <input type="text" placeholder="Kg" name="weight" id="kg" class="field2">
            <br><br>
            <label for="fheight"><b>&emsp;Tinggi Badan :</b></label>
            <input type="text" placeholder="cm" name="height" id="cm" class="field3"> 
            <br><br>
            <label for="fblood" class="label"><b>&emsp;Gologan Darah : </b>
            <select name="blood" id="blood"class="field4">
                <option value="none">Pilih Gologan Darah</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="O-">O-</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br><br>
            <label for="ffat" class="label"><b>&emsp;Kadar Lemak Tubuh  : </b>
            <select name="fat" id="fat"class="field5">
                <option value="0">Pilih Kadar Lemak Tubuh</option>
                <option value="8">8%</option>
                <option value="12">12%</option>
                <option value="15">15%</option>
                <option value="20">20%</option>
                <option value="25">25%</option>
                <option value="30">30%</option>
                <option value="35">35%</option>
                <option value="40">40%</option>
                <option value="45">45%</option>
            </select><br><br>
            <label for="fmed" class="label"><b>&emsp;Konsumsi Obat-obatan : </b>
            <select name="yes" id="obat" class="field6">
                <option value="none">Pilih Konsumsi Obat-obatan</option>
                <option value="Ada">Ada</option>
                <option value="Tidak">Tidak</option>
            </select><br><br>
            <label for="fbody" class="label"><b>&emsp;Tujuan Olahraga : </b>
            <select name="body" id="body" class="field7">
                <option value="none">Pilih Tujuan Olahraga</option>
                <option value="Menuruntkan_Berat_Tubuh">Menuruntkan Berat Tubuh</option>
                <option value="Menjaga_Kebugaran_Tubuh">Menjaga Kebugaran Tubuh</option>
                <option value="Membentuk_Otot_Tubuh">Membentuk Otot Tubuh</option>
                </select><br><br>
                <h3 id="demo"></h3>
                <button type="submit" class="startbtn" onclick="myFunction()">Proses Test</button>

        </div> 
        <div class="box2"><div class="image1"><img src="Picture/Body Fat.png" width="450" height="350"></div></div>
            
            </div>
            <div class="Border1">
            <div class="pres"><h1>Hasil</h1></div>
            <hr>
            
            <h4 id="demo2"></h4>
            <h4 id="demo3"></h4>
            <hr>
            <h4 id="demo1"></h4>
            <h4 id="demo5"></h4>
            <h4 id="demo6"></h4>
            <hr>
            <h4 id="demo7"></h4>
            <p id="result1"></p>
            <p id="result2"></p>
            
            </div>
            </content>
            
    </body>
</html>