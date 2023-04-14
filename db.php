<?php

$host = 'localhost';
$dbuser = 'james';
$dbpass = 'james';
$database = 'product';

    //create connection

    $con = new mysqli($host, $dbuser, $dbpass, $database);

    if(!$con){
       die("Connection failed" . mysqli_connect_error($con));
    }else{
        'Connection Succesful!';
    }


    
    ?>

