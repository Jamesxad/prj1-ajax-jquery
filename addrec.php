<?php
include 'db.php';
extract($_POST);


if (isset($_POST['productname'])){

    $productname="";
    $uom="";
    $unitprice="";
    $bbd="";
    $onstock="";
    $totalcost="";
    $piclocation="";

    $errorMessageMail="";
    $errorMessagePhone="";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $productname=$_POST['productname'];
    $uom=$_POST['uom'];
    $unitprice=$_POST['cost'];
    $bbd=$_POST['bbd'];
    $onstock=$_POST['quantity'];
    $totalcost=$_POST['totalcost'];
    $piclocation= str_replace("/imageupload/junkupload/", "", $_POST['piclocation']);

    }else{
    $sqlmail = "SELECT * FROM data WHERE productname ='$productname'";
        
    $check = mysqli_query($con, $sqlmail);
    $checkres = mysqli_num_rows($check);
       //add client to database
       if($checkres>=1){
            
        echo " Already Exist "; 

         
     }else{

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

    $sql ="INSERT INTO data (productname,uom,quantity,bbd,cost,image,totalcost) 
    VALUES ('$productname','$uom','$onstock','$bbd','$unitprice',' $piclocation','$totalcost')";

    $result = mysqli_query($con,$sql);
    echo'Record added succesfully';
}
}
}

   
$con->close();

?>
