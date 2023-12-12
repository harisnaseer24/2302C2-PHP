<?php 
require("../include/connection.php");

$id=$_POST['userid'];



$update="SELECT * FROM `user_details` WHERE id=$id;";

$result=mysqli_query($connection,$update);
if($result){
    $row=mysqli_fetch_assoc($result);
    // $row['id']
    // $row['uname']
    // $row['email']
    // $row['pass']
    echo json_encode($row);
}
else{
    echo "record not found.";
}

?>




