<?php 
require("../include/connection.php");

$id=$_POST['id'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];

if(!$uname=="" && !$email=="" && !$pass==""){

$insert="INSERT INTO `user_details`(`id`, `uname`, `email`, `pass`) VALUES ('$id','$uname','$email','$pass') ON DUPLICATE KEY UPDATE `uname`='$uname',`email`='$email', `pass`='$pass';";

$result=mysqli_query($connection,$insert);
if($result){
    echo "Success"; 
}
else{
    echo "record not found.";
}
}
else{
    echo "Please fill all fields.";
}
?>




