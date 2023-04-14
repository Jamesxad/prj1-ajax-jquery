<?php
include 'db.php';


if(isset($_POST['productname']))
{
    $updateid=$_POST['updateid'];
    $productname = $_POST['productname'];
	$uom = $_POST['uom'];
	$onstock = $_POST['onstock'];
	$unitprice = $_POST['unitprice'];
	$totalcost = $_POST['totalcost'];
	$bbd = $_POST['bbd'];

    if (str_contains($_POST['piclocation'], 'junkupload'))
	{
		$piclocation = str_replace("/imageupload/junkupload/", "", $_POST['piclocation']);

		// save image folder
		$file_array = explode(".", $piclocation);
		$extension = end($file_array);
		$droot = $_SERVER['DOCUMENT_ROOT'];
		$productimage = '/imageupload/productimage/';
		$junkfile = '/imageupload/junkupload/';

		// check file if exist
		if (file_exists($droot.$productimage.$productname.'.'.$extension))
		{
			// delete old file
			unlink($droot.$productimage.$productname.'.'.$extension);
		}

		// copy files
		copy($droot.$junkfile.$piclocation, $droot.$productimage.$piclocation);

		// rename file
		rename($droot.$productimage.$piclocation, $droot.$productimage.$productname.'.'.$extension);

		// new name file
		$newnamefile = $productimage.$productname.'.'.$extension;
	}
	else
	{
		$newnamefile = $_POST['piclocation'];
	}


	mysqli_query($con, "UPDATE `data` SET `productname`='$productname',`uom`='$uom',`quantity`='$onstock',`bbd`='$bbd',
	`cost`='$unitprice',`image`='$newnamefile',`totalcost`='$totalcost' WHERE id='$updateid' ");
  
	echo "Update Successfully!";


}
$con->close();
?>