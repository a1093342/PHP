<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "jakarta_login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("fail to connect!");
}
