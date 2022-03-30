<?php
session_start();

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Yes'){

        echo "<a href='logout_2.php'>logout</a>";
    }else{
        echo "cant enter website";
        exit();
    }
}else{
    echo "cant enter website";
    exit();
}

?>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<center>
<h1>WELCOME TO ADMIN</h1>
</center>
</body>


</html>