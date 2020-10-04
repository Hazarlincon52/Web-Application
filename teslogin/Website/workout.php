<?php
 session_start();
 include_once '../includes/databaseuser.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/styleworkout.css">
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
        <conntent>
        
        <h1>Teknik Olahraga</h1>
        <table style="widtd:120%">
        <tr>
        <td>
        <div class="border1">
            <h4>Olahraga Upper Body</h4><br>
            <a href="pageworkout/chest expension.php"><img src="Picture/Crop/chest expension.png" width="200" height="140"></a>
            <h4>Chest Expension</h4>
            <a href="pageworkout/pushup.php"><img src="Picture/Crop/pushup.png" width="120" height="120"></a>
            <h4>Push Up</h4>
            <a href="pageworkout/pushup hold.php"><img src="Picture/Crop/pushup hold.png" width="120" height="120"></a>
            <h4>Push Up Tahan</h4>
            <a href="pageworkout/power pushup.php"><img src="Picture/Crop/power pushup.png" width="120" height="120"></a>
            <h4>Power Push Up</h4>
            
        </div>
        </td>
        <td>    
        <div class="vl1"></div>
        </td>
        <td>
        <div class="border2">
            <h4>Olahraga Core Body</h4><br>
            <a href="pageworkout/climber.php"><img src="Picture/Crop/climber.png" width="120" height="120"></a>
            <h4>Climber</h4>
            <a href="pageworkout/cross crunches.php"><img src="Picture/Crop/cross crunches.png" width="120" height="120"></a>
            <h4>Cross Crunches</h4>
            <a href="pageworkout/Flutter kick.php"><img src="Picture/Crop/Flutter kick.png" width="120" height="120"></a>
            <h4>Flutter Kick</h4>
            <a href="pageworkout/high knees.php"><img src="Picture/Crop/high knees.png" width="120" height="120"></a>
            <h4>High Knees </h4>
            <a href="pageworkout/leg raise.php"><img src="Picture/Crop/leg raise.png" width="120" height="120"></a>
            <h4>Leg Raises</h4> 
            <a href="pageworkout/lunge.php"><img src="Picture/Crop/lunge.png" width="120" height="120"></a>
            <h4>Lunge</h4>
            <a href="pageworkout/plank jump-ins.php"><img src="Picture/Crop/plank jump-ins.png" width="120" height="120"></a>
            <h4>Plank Jump-Ins</h4>
        </div>
        </td>
        <td>  
        <div class="vl2"></div>
        </td>
        <td>
        <div class="border3">
            <h4>Olahraga Lower Body</h4><br>
            <a href="pageworkout/calf raises.php"><img src="Picture/Crop/calf raises.png" width="120" height="120"></a>
            <h4>Calf Raises </h4>
            <a href="pageworkout/squat.php"><img src="Picture/Crop/squat.png" width="120" height="120"></a>
            <h4>Squat</h4>
            <a href="pageworkout/wall sit.php"><img src="Picture/Crop/wall sit.png" width="120" height="120"></a>
            <h4>Wall Sit </h4>
        </div>   
        </td>
        <td> 
        <div class="vl3"></div>
        </td>
        <td>
        <div class="border4">
            <h4>Olahraga Kardio</h4><br>
            <a href="pageworkout/bounces.php"><img src="Picture/Crop/bounces.png" width="120" height="120"></a>
            <h4>Bounce</h4>
            <a href="pageworkout/half jack.php"><img src="Picture/Crop/half jack.png" width="120" height="120"></a>
            <h4>Half Jack</h4>
            <a href="pageworkout/jump squat.php"><img src="Picture/Crop/jump squat.png" width="120" height="120"></a>
            <h4>Jump Squats </h4>
            <a href="pageworkout/Jumping jack.php"><img src="Picture/Crop/Jumping jack.png" width="120" height="120"></a>
            <h4>Jumping Jack</h4>
        </div>
        </td>
        </tr>
        </table>    
            </content>
    </body>
</html>