<?php
include 'db.php';

if (isset($_POST['productname']))
{
	$productname = $_POST['productname'];
	$uom = $_POST['uom'];
	$onstock = $_POST['onstock'];
	$unitprice = $_POST['unitprice'];
	$totalcost = $_POST['totalcost'];
	$bbd = $_POST['bbd'];
	$piclocation = str_replace("/imageupload/junkupload/", "", $_POST['piclocation']);
	
	// check data if already exist
	$check_query = mysqli_query($con,"SELECT * FROM data WHERE productname='$productname'");
	$count_row = mysqli_num_rows($check_query);

	if ($count_row >= 1)
	{
		echo "Item is already exist.";
	}
	else
	{
		// save image folder
		$file_array = explode(".", $piclocation);
		$extension = end($file_array);
		$droot = $_SERVER['DOCUMENT_ROOT'];
		$productimage = '/imageupload/productimage/';
		$junkfile = '/imageupload/junkupload/';

		// copy files
		copy($droot.$junkfile.$piclocation, $droot.$productimage.$piclocation);

		// rename file
		rename($droot.$productimage.$piclocation, $droot.$productimage.$productname.'.'.$extension);

		// new name file
		$newnamefile = $productimage.$productname.'.'.$extension;

		mysqli_query($con,"INSERT INTO data(productname,uom,quantity,cost,totalcost,bbd,image) VALUES ('$productname','$uom','$onstock','$unitprice','$totalcost','$bbd','$piclocation')");

		echo "Add Successfully!";
	}
}

$con->close();
?>