<?php
require("DBconnect.php");
$uNo=$_GET["uNo"];
$SQL="SELECT * FROM user WHERE uNo='$uNo'";
if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc{$result}){
        $uName=$row['uName'];
        $uPwd=$row['uPwd'];
        $uRole=$row['uRole'];
    }
}

?>

<h1>use of update</h1>

