<?php
include 'db.php';

    if(isset($_POST['deleted'])){
        $deleteid=$_POST['deleted'];

        $sql=" DELETE FROM data where id=$deleteid";
        $result=mysqli_query($con,$sql);
    }

?>
