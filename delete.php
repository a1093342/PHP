<?php

require("DBconnect.php");

$uNo=$_GET["uNo"];
echo $uNo;
$SQL="DELETE FROM user WHERE uNo='$uNo'";


?>