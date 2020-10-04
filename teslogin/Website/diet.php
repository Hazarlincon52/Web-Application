<?php
 session_start();
 include_once '../includes/databaseuser.php';
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/stylediet.css">
    </head>
    <body>
    <header>
            <div class="box1">
            <div class="logo"><a href="Main_Menu.php"><img src="Picture/logo button.png" width="220" height="50"></div></a>
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
                <h1>Diet Plan</h1><br>
                
                <table style="width:100%">
                <tr>
                    <td>
                        <h2>&emsp;Plan A</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="size1"><a href="pagediet/planA.php"><img src="pagediet/Crop/sayuran dan daging.png" width="200" height="200"></a></div>
                    </td>
                    <td>
                        <p>Pada Plan ini mengfokuskan untuk meyeimbangkan konsumsi makanan Daging dan Sayuran yang akan mengurangi serapan kolesterol, 
                           merendahkan kadar lemak tubuh, dan pegurangan konsumsi 
                           kabohidrat
                        </p>
                    </td>
                </tr>
                </table>
                <hr>
                <table style="width:100%">
                <tr>
                    <td>
                        <h2>&emsp;Plan B</h2>
                    </td>
                </tr>
                <tr>
                <td>
                <div class="size1"><a href="pagediet/planB.php"><img src="pagediet/Crop/muscle.png" width="200" height="200"></a></div>
                </td>
                    <td>
                    <p>Pada Plan ini mengfokuskan untuk meyeimbangkan konsumsi makanan Daging dan Kabohidrat yang akan meningkatakan serapan kalori yang seimbang untuk meningkatkan masa otot, 
                           merendahkan kadar lemak tubuh, dan pengkonsumsi kabohidrat untuk meningkatkan daya tahan tubuh dan memberi energi selama latihan.
                        </p>
                    </td>
                </tr>
                </table>
                <hr>
                <table style="width:100%">
                <tr>
                    <td>
                        <h2>&emsp;Plan C</h2>
                    </td>
                </tr>
                <tr>
                <td>
                <div class="size1"><a href="pagediet/planC.php"><img src="pagediet/Crop/seimbang.png" width="200" height="200"></a></div>     
                </td>
                    <td>
                    <p>Pada Plan ini mengfokuskan untuk meyeimbangkan konsumsi makanan Daging, Kabohidrat, Sayur-sayuran, dan Buah-buahan yang akan meyeimbagi serapan nutrisi, kalori, dan vitamin pada tubuh, 
                           merendahkan kolesterol, dan menigkatkan imunitas tubuh.
                        </p>
                    </td>
                </tr>
                </table>
                
            </div>
            </content>
    </body>
</html>