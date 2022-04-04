
<?php
$conn2 = mysqli_connect("localhost", "ahmed", "123", "filesmange");
if (!$conn2) {
echo mysqli_connect_error();}

if (isset($_POST['submit2'])) {
    $filenamefer2a2 = $_FILES['fileup2'];

      $fer2atitle2 = $_POST['filename2'];

     $videonamefer2a2 = $filenamefer2a2['name'];

    $subtitlefer2a2 = $_POST['filesubtitle2'];  

    $temp = $filenamefer2a2["tmp_name"];

    $error = $filenamefer2a2["error"];
$img_count =count($filenamefer2a2);

$sql12345 ="INSERT INTO upload2(photo2, filename2, subtitle2) VALUES ('assets/pages/img2/$videonamefer2a2', '$fer2atitle2', '$subtitlefer2a2')";

mysqli_query($conn2, $sql12345);  

$comedata2 = "SELECT * FROM upload2";

$reslut2 = mysqli_query($conn2, $comedata2);  
$sqll12 = mysqli_fetch_all($reslut2 , MYSQLI_ASSOC);
$folder = "./img2/".$videonamefer2a2;
move_uploaded_file($temp,$folder);


}



