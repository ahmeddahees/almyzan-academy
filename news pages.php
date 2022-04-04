<?php
// include "./assets/php/upload.php";
include "./assets/php/uploadf2.php";
// include "./assets/php/uploadfer2a2.php";
$comedatanew1 = "SELECT * FROM `news` ORDER BY id DESC LIMIT 1";
$reslutnew = mysqli_query($conn12, $comedatanew1);  
$sql1new = mysqli_fetch_all($reslutnew , MYSQLI_ASSOC);

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
<div class="bgblack"></div>

<?php
include "./assets/pages/nav.php";
?><?php 
foreach ($sql1new as $news) {
    if ($_GET['id'] == $news['id']) {
       $video = $news['newphoto'];
       $title = $news['title'];
       $subtitle = $news['subtitle'];

    
    };
        
}
?>
<br><br>
<h1><?php echo $title; ?> </h1>
<div class="newspage">
    
<div class="newimg"><img width="100%" src="<?php echo $video; ?>"></div>
<div class="newsubtitle"> <?php echo $subtitle; ?> </div>

</div>
<?php
include "./assets/pages/fotter.php";
?>
</body></html>