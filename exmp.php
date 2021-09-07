<?php

$db = mysqli_connect("localhost","root","","service_finder");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>