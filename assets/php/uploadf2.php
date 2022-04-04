
<?php
$conn12 = mysqli_connect("localhost", "ahmed", "123", "filesmange");
if (!$conn12) {
echo mysqli_connect_error();}

if (isset($_POST['submiit'])) {
    $newphoto = $_FILES["newimg"];

      $newtitle = $_POST['newname'];

     $newphotoname = $newphoto['name'];

    $newsubtitle = $_POST['newsubtitle'];  

    $temp = $newphoto["tmp_name"];

    $error = $newphoto["error"];

// $img_count =count($newphoto);

$sql1234 ="INSERT INTO news(title, newphoto, subtitle) VALUES ('$newtitle', 'assets/pages/newimg/$newphotoname', '$newsubtitle')";

mysqli_query($conn12, $sql1234);

$comedatanew1 = "SELECT * FROM `news` WHERE 1";

$reslutnew = mysqli_query($conn12, $comedatanew1);  
$sql1new = mysqli_fetch_all($reslutnew , MYSQLI_ASSOC);
$folder = "./newimg/".$newphotoname;
move_uploaded_file($temp,$folder);


}



