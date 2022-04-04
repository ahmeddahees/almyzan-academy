
<?php

echo "asdasdsad";
$conn1 = mysqli_connect("localhost", "ahmed", "123", "filesmange");
if (!$conn1) {
echo mysqli_connect_error();}

if (isset($_POST['submit'])) {
    $filenamefer2a1 = $_FILES['fileup1'];
      $fer2atitle1 = $_POST['filename1'];
     $videonamefer2a1 = $image_name['fileup1'];
    $subtitlefer2a1 = $_POST['filesubtitle1'];  
    $temp = $videonamefer2a1["tmp_name"];
    $error = $videonamefer2a1["error"];

$img_count = count($videonamefer2a1);

 


$sql123 =  "INSERT INTO upload(video, filename1, subtitle) VALUES ('$filenamefer2a1', '$filenamefer2a1', '$subtitlefer2a1')";
if (!$sql123) {
echo "asfasfasf";} 
mysqli_query($conn1, $sql123);  

$comedata = "SELECT * FROM upload";

$reslut = mysqli_query($conn1, $comedata);  
$sqll1 = mysqli_fetch_all($reslut , MYSQLI_ASSOC);
$folder = "./Img/".$videonamefer2a1;
move_uploaded_file($temp,$folder);

}



