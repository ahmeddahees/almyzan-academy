<?php include 'mail.php'; ?>
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
    <title>contact us</title>
</head>
<body>
<?php
include "./assets/pages/nav.php";
?>
<form class="form1" action="contact.php" method="POST" >
<input type="text" id="name" name="name" placeholder="title of news">
<input type="email" id="email" name="email" placeholder="title of news">
<input type="text" id="subject" name="subject" placeholder="title of news">
<input type="text" id="message" name="message" placeholder="title of news">
<input type="submit" name="submit" value="send now">




</form>    
<?php
include "./assets/pages/fotter.php";
?>
</body>
</html>