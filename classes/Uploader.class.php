<?php

include 'Db.class.php';

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

        try {
          $db = new Db;
          $upload = "INSERT INTO images (name,image) VALUES(:filename,:filedest)";
          $stmt = $db->connect()->prepare($upload);
          $stmt->bindParam(':filename', $fileNameNew);
          $stmt->bindParam(':filedest', $fileDestination);
          $stmt->execute();
          header ("Location: ../upload.php?upload=success");
        } catch (\Exception $e) {
          echo "Error". $e->getMessage();
        }
      } else {
        echo "Your file is too big!";
      }
    } else {
      echo "There was an error uploading your files";
    }
  } else {
    echo "You Can't Upload files of this type!";
  }

  }

?>
