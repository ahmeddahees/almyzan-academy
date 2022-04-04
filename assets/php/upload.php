
<?php
$conn1 = mysqli_connect("localhost", "ahmed", "123", "filesmange");
if (!$conn1) {
echo mysqli_connect_error();}

if (isset($_POST['submit'])) {
    $filenamefer2a1 = $_FILES['fileup'];

      $fer2atitle1 = $_POST['filename'];

     $videonamefer2a1 = $filenamefer2a1['name'];

    $subtitlefer2a1 = $_POST['filesubtitle'];  

    $temp = $filenamefer2a1["tmp_name"];

    $error = $filenamefer2a1["error"];
$location = `assets/pages/Img/`;
$img_count =count($filenamefer2a1);

$sql123 ="INSERT INTO upload(video, filename1, subtitle) VALUES ('assets/pages/Img/$videonamefer2a1', '$fer2atitle1', '$subtitlefer2a1')";

mysqli_query($conn1, $sql123);  

$comedata = "SELECT * FROM upload";

$reslutnew = mysqli_query($conn1, $comedata);  
$sqll1new = mysqli_fetch_all($reslutnew , MYSQLI_ASSOC);
$folder = "./Img/".$videonamefer2a1;
move_uploaded_file($temp,$folder);


}



