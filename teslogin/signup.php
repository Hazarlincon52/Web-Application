<form class="form-signup" action="includes/signup2.php" method="post">
<link rel="stylesheet" type="text/css" href="includes/css/csssignup.css">
    <h1>Sign Up</h1>
    
    <div class="border">
    <h3> Isi Form</h3>   
    <label for="fname" class="label"><b>&emsp;Username : </b></label><input type="text" name="uid"placeholder="Username" class="field1"><br><br>
    <label for="femail"class="label"><b>&emsp;Email : </b><input type="text" name="mail"placeholder="Email"class="field2"><br><br>
    <label for="fpsw"class="label"><b>&emsp;Password : </b><input type="password" name="psw"placeholder="Password"class="field3"><br><br>
    <label for="fpsw-repeat"class="label"><b>&emsp;Confirmasi Password : </b><input type="password" name="psw-repeat"placeholder="Confirmasi Password"class="field4"><br><br>
    <label for="fage"class="label"><b>&emsp;Umur : </b><input type="text" name="age"placeholder="Umur"class="field5"><br><br>
    <label for="fgender"class="label"><b>&emsp;Kelamin : </b>
    <select name="gender"class="field6">
                <option value="Pria">Pria</option>
                <option value="Perempuan">Perempuan</option>
    </select><br><br>
    <div class="notifsalah">
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
            echo '<p><b> Isi semua fileds!</b></p>';
        }
        else if($_GET["error"] == "invalidmailuid"){
            echo '<p><b> Email dan Username tidak sesuai!</b></p>';
        }
        else if ($_GET["error"] == "invaliduid") {
            echo '<p><b> Username tidak sesuai! (tidak boleh ada spasi)</b></p>';
        }
        else if($_GET["error"] == "invalidmail"){
            echo '<p><b> Email tidak sesuai!</b></p>';
        }
        else if($_GET["error"] == "passwordcheckuid"){
            echo '<p><b> Password confirmasi tidak sesuai!</b></p>';
        }
        else if($_GET["error"] == "usertaken"){
            echo '<p><b> Username sudah di ambil!</b></p>';
        }
        else if($_GET["error"] == "noword"){
            echo '<p><b> Masukan Umur yang benar!</b></p>';
        }
    }
    ?>
    </div>
    <div class="notifbenar">
    <?php
    
    if (isset($_GET["signup"])) {
        if($_GET["signup"] == "success"){
            echo '<p><b> Signup Success !</b></p>';
        }
    }
    ?>
    </div>
    <button type="submit" name="signup" class="button1">Sign Up</button><br><br>
    
</div>
    
</form>



