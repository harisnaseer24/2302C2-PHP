<?php 
include("../include/connection.php");
if(isset($_GET['item_id'])){
    $itemId=$_GET['item_id'];
$removeItem="DELETE FROM `cart` where `cart_id`=$itemId;";
$removeItem_run=mysqli_query($connection, $removeItem) or die("failed");
if($removeItem_run){
    echo "<script>alert('Item deleted Successfully')
    window.location.href='cart.php'</script>";
}else{
    echo "<script>alert('Failed to remove this item right now..!')
    window.location.href='cart.php'</script>";

}

}else{
    header("location: cart.php");
}
?>
