<?php
include('db.php');

if (isset($_FILES['picture']))
{
	$allowed_ext = array('jpeg','jpg');
	$file_array = explode(".", $_FILES['picture']["name"]);
	$extension = end($file_array);

	// check file extension
	if (in_array($extension, $allowed_ext))
	{
		$files = $_FILES['picture']["name"];

		// save image folder
		$droot = $_SERVER['DOCUMENT_ROOT'];
		$directory = '/imageupload/junkupload/';
		$location = $droot.$directory.$files;

		// move upload file
		if (move_uploaded_file($_FILES['picture']['tmp_name'], $location))
		{
			echo $directory.$files;
		}
	}
	else
	{
		echo "Invalid File.";
	}
}


$con->close();
?>