<?php 
require("../include/connection.php");

$id=$_POST['userid'];




$trash="UPDATE `user_details` SET `status`=0 WHERE id='$id';";
$result=mysqli_query($connection,$trash);
if($result){
    echo "Record moved to trash successfully .".mysqli_affected_rows($connection)." row/rows affected."; 
}
else{
    echo "failed to delete this record.";
}

?>




