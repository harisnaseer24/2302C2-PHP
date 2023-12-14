<?php 
require("../include/connection.php");

$id=$_POST['userid'];

$delete="DELETE from `user_details` WHERE id='$id';";
$result=mysqli_query($connection,$delete);
if($result){
    echo "Record Deleted permanently .".mysqli_affected_rows($connection)." row/rows affected."; 
}
else{
    echo "failed to delete this record.";
}

?>




