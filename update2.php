<?php
include 'db.php';


if(isset($_POST['updateid'])){

    $updateid=$_POST['updateid'];
    $productname = $_POST['productname'];
	$uom = $_POST['uom'];
	$onstock = $_POST['onstock'];
	$unitprice = $_POST['unitprice'];
	$totalcost = $_POST['totalcost'];
	$bbd = $_POST['bbd'];


$sql = "UPDATE `data` SET `productname`='$productname',`uom`='$uom',`quantity`='$onstock',`cost`='$unitprice',`totalcost`='$totalcost', 'bbd'='$bbd','image'='$newnamefile' WHERE id='$updateid' ";
  
  
$result = mysqli_query($con, $sql);

}
?>