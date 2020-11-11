<?php
include "connect.php";
if(isset($_POST["upload"])){
    $name=$_POST['name'];
    $filename=$_FILES["carousel"]["name"];
    $tempname=$_FILES["carousel"]["tmp_name"];
    $folder="./gallery/".$filename;
    move_uploaded_file($tempname, $folder);
    $sql="INSERT INTO `gallery` (`name`, `img_path`) VALUES ('$name','$folder')";
  $sqlquery=mysqli_query($con,$sql);
  if($sqlquery){
      echo "Carousel added successfully";
  }
  else{
      echo "Carousel submission failed".mysqli_error();
  }
}
?>