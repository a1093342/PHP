<?php
$link = @mysqli_connect(
    'localhost',
    'root',
    '',
    'php');


    //if( !mysqli_select_db($link, $dbname) ){
    //    die("can't start $dbname information");
    //}else{
    //    echo "information : $dbname success";
    //}

$SQL="SELECT * FROM user";

if ($result=mysqli_query($link, $SQL)){
        echo "<table border='1'>";
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr>";
        echo "<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPwd"]."</td><td>".$row["uRole"]."</td><br/>";
        echo"</tr>";
    }
    echo "</table>";
}


?>