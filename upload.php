<?php
  if (is_uploaded_file($_FILES['my-file']['tmp_name']) && $_FILES['my-file']['error']==0) {
    echo "The file was uploaded successfully but has not been saved.<br>";
    echo "The file is temporarily stored: " . $_FILES['my-file']['tmp_name'] . "<br>";
    echo "The file name was: " . $_FILES['my-file']['name'] . "<br>";
    echo "The file type is: " . $_FILES['my-file']['type'] . "<br>";
    echo "The file size is: " . $_FILES['my-file']['size'] . "<br>";

    $path = './uploads/' . $_FILES['my-file']['name'];
    if (!file_exists($path)) {
      echo "File does not exist. It is safe to move the temporary file. <br>";
    } else {
      echo "File already exists. Please upload another file.";
    }

    if (move_uploaded_file($_FILES['my-file']['tmp_name'], $path)) {
      echo "The file was uploaded successfully.";
    } else {
      echo "The file was not uploaded successfully.";
    }

  }
  else {
    echo "The file was not uploaded successfully. <br>";
    echo "(Error Code:" . $_FILES['my-file']['error'] . ") <br>";
  }
?>
