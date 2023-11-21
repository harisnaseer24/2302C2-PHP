<?php 

// print_r($_POST);
require("connection.php");

if($_GET['id']){
    // echo "id found";
   $id=$_GET['id'];


$delete="DELETE FROM `student` WHERE id= '$id';";



$result=mysqli_query($connection , $delete) or die("failed to insert query.");
if($result){
   echo "<script>alert('Student`s Details Deleted.')</script>;";
   header("location: index.php");
}
else{
    echo "<script>alert('Sorry, Failed to delete this record.')</script>";
}}

?>