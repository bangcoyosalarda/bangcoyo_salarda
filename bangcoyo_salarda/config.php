<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "bangcoyo_salarda";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if(!$con)
{
    die("". mysqli_connect_error());
}


?>