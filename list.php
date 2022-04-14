<?php
require("DBconnect.php");
$SQL="SELECT * FROM user";

if($result=mysqli_query($link,$sql)){
    echo "<table='1'>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["uName"]."</td><td>".$row["uPwd"]."</td><td>".$row["uRole"]."</td><td><a href='delete.php?uNo=".$row["uNo"]."'>刪除</a></td><td>修改</td>";
        echo "</tr>;"
    }
    echo "</table>";
}


?>