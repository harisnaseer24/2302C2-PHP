<?php 
require("../include/connection.php");

$id=$_POST['userid'];

$restore="UPDATE `user_details` SET `status`=1 WHERE id='$id';";
$result=mysqli_query($connection,$restore);
if($result){
    echo "Record Restored successfully .".mysqli_affected_rows($connection)." row/rows affected."; 
}
else{
    echo "failed to restore this record.";
}

?>




