<?php 

$server="localhost";
$username="root";
$dbpass="";
$dbname="2302C2";

$connection=mysqli_connect($server,$username,$dbpass,$dbname);
if(!$connection){
    die("Failed to connect");
}
// else{
//     echo"connected";
// }
?>