<?php
ob_start();

$uName=$_POST["uName"];
$uPwd=$_POST["uPwd"];
$role=$_POST["role"];

$SQL="INSERT INTO user (uName, uPwd, uRole) VALUES ('$uName','$uPwd','$role')";


?>