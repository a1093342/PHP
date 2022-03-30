<?php
session_start();

if(isset($_SESSION['login'])){
    if($_SESSION['login']=='Yes'){

        echo "<a href='logout.php'>logout</a>";
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
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>

<h3>Register here</h3>

<form action="password.php" method="post">
    <table>
        <tr>
        <td>Username:</td>
        <td><input type="text" name="uname" placeholder="enter your username"></td>
        </tr>

        <tr>
        <td>Email:</td>
        <td><input type="email" name="mail" placeholder="enter your email"></td>
        </tr>

        <tr>
        <td>Password:</td>
        <td><input type="password" name="passw" placeholder="enter your password"></td>
        </tr>

        <tr>
        <td>Enter your password one more time:</td>
        <td><input type="password" name="passw2" placeholder="enter your password"></td>
        </tr>

        <tr>
        <td>Gender:</td>
        <td>
        <input type="radio" name="gender">Male
        <input type="radio" name="gender">Female
        </td>
        </tr>

        <tr>
        <td>Tel:</td>
        <td><input type="phone" name="telephone" placeholder="09********"></td>
        </tr>

        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
            <td><a href="password.php">Login here</a></td>
        </tr>

</center>
</form>
</body>



</html>