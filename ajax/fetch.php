<?php 
require("../include/connection.php");

$read="SELECT * FROM `user_details` where status=1;";

$result=mysqli_query($connection,$read);
if($result){
if(mysqli_num_rows($result) > 0){

while($row=mysqli_fetch_assoc($result)){
$id=$row['id'];
    echo "<tr>
   <td scope='row'>".$id."</td>
  <td>".$row['uname']."</td>
 <td>".$row['email']."</td>
 <td>".$row['pass']."</td>

 <td> <button class='btn btn-outline-primary upd' data-id=".$id."><i class='fa-solid fa-pen-to-square'></i></button></td>
 <td><button class='btn btn-outline-primary del' data-id=".$id."><i class='fa-solid fa-trash'></i></button></td>
    
   </tr>"; 
}

}
else{
    echo "<script>alert('record not found')</script>";
}

}
?>




