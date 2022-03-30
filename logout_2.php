<?php
session_start();
session_abort();
//setcookie("UID",$uID,time()-30);
header('Location:login_2.php');
?>