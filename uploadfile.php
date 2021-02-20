

<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="fileToUpload[]" multiple="multiple">
		<input type="submit" name="submit" value="Upload">
	</form>
	<?php
if(isset($_POST["submit"])) {
$target_dir = "uploads/";
// Count # of uploaded files in array
$total = count($_FILES['fileToUpload']['name']);
// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {
$target_file = basename($_FILES["fileToUpload"]["name"][$i]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  // if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
  //   echo "Upload thanh cong";
  // } else {
  //   echo "co loi xay ra";
  // }
	file_put_contents($target_file, file_get_contents($_FILES["fileToUpload"]["tmp_name"][$i]));
}
}
}
?>
</body>
</html>