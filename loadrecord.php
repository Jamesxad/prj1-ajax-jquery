<?php include 'db.php';

if(isset($_POST['updateid'])){
    $updateid=$_POST['updateid'];

    $sqlid="SELECT * FROM data where id=$updateid";
    $result=mysqli_query($con,$sqlid);
    $response=array();
    while($row=mysqli_fetch_assoc($result)){
        $response=$row;

    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalid or data not found";
}


$con->close();
?>
