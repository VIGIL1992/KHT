<?php

// CREATING DATABASE CONNECTION
$connection = mysqli_connect("localhost","root","","KHT");
if(!$connection){
    die("Connection Failed: ".mysqli_connect_error());
}

?>