<?php
 require "header.php";
 include_once 'includes/databaseuser.php';
?>

<html>
<head>    
<link rel="stylesheet"  href="test.css">
</head>
<body>
    <div class="hello">
<?php 
if(isset($_SESSION ['userid'])){
    echo 'You are login '.$_SESSION['useruid'];
     
}

?>
</div>
</body>

</html>
