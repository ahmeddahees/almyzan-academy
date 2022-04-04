<?php
// include "./assets/php/upload.php";
// include "./assets/php/uploadf2.php";
include "./assets/php/uploadfer2a2.php";
$comedata2 = "SELECT * FROM upload2";

$reslut2 = mysqli_query($conn2, $comedata2);  
$sqll12 = mysqli_fetch_all($reslut2 , MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./assets/scss/scss.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons.css">

    <script defer src="./assets/js/font icon.js">
    </script>
    <script defer src="./assets/js/javascript.js"></script>
    <script defer src="./assets/js/bootstrap.bundle.min.js">
    </script>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
<?php
include "./assets/pages/nav.php";
?>
<?php 
foreach ($sqll12 as $sqlf2) {
    if ($_GET['id'] == $sqlf2['id']) {
       $video = $sqlf2['photo2'];
       $title = $sqlf2['filename2'];
       $subtitle = $sqlf2['subtitle2'];

    
    };
        
}
?>
<br><br>
<h1><?php echo $title; ?> </h1>
<br><br>
<br>

<center>
<audio controls preload="none">

<source src="./<?php echo $video;?>"> 
</audio>
<br><br>
<br><br>

<div class="cntr"><?php echo $subtitle;?></div>

</center>
<?php
include "./assets/pages/fotter.php";
?>
</body>
</html>