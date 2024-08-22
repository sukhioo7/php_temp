<?php

$username = 'root';
$password = '';
$database = 'maxfit';
$server = 'localhost';

$connection = mysqli_connect($server,$username,$password,$database);

// print_r($response);
if (!$connection){
    echo "Can't Connect to Database";
}


?>