<?php 

$server="localhost";
$username="root";
$dbpass="";
$dbname="2302C2";

$connection=mysqli_connect($server,$username,$dbpass,$dbname);
if($connection){
// echo "Connected SUCCESSFULLY";
$read="SELECT * FROM `mobiles`;";
$result=mysqli_query($connection,$read);
if($result){
if(mysqli_num_rows($result) > 0){

?>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Mobile Name</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>
<?php   
while($row=mysqli_fetch_assoc($result)){

    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['stock']."</td>";
    echo "</tr>";
    
}
?>
</table>
<?php
}
else{
    echo "<script>alert('record not found')</script>";
}

}else{
echo "<script>alert('Failed to execute query')</script>";
}

}else{
    die("Failed to connect");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>