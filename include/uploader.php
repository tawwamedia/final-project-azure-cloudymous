<?php

include_once '../classes/Db.class.php';

$statusAllert = "";
$targetDir = "images/";

if (isset($_POST['submit'])) {

  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileType = $_FILES['file']['type'];
  $fileTemp = $_FILES['file']['tmp_name'];
  $fileError = $_FILES['file']['error'];
  $fileSize = $_FILES['file']['size'];

  $fileExt = explode(".", $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg','jpeg','png');

  if (in_array($fileActualExt, $allowed)){
    if ($fileError === 0) {
      if ($fileSize < 2000000){
        $fileNameNew = uniqid('', true).".".$fileActualExt;
        $fileDestination = '/home/cloudymous/Azure/final-project-azure-cloudymous/uploads/'.$fileNameNew;
        move_uploaded_file($fileTemp, $fileDestination);
        header ("Location: ../index.php?uploadsucess");
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo "There was an error uploading your files";
    }
  } else {
    echo "You Can't Upload files of this type!";
  }

  // $query = "INSERT INTO images (name,image) VALUES (?,?)";
  // $stmt = $conn->prepare($query);



}

?>
