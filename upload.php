
<?php
$site = "http://localhost/fivem/";
$target_dir = "screen/";
$rdm = rand(0,999999999999999999);
$target_file = $target_dir . $rdm.basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  echo $site.$target_dir.$rdm.basename($_FILES["fileToUpload"]["name"]);
}