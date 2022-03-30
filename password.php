<?php
//如果出現header already start
//ob_start();
session_start();
?>

<?php
if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "welcome ".$cookieID." welcome to our website";
}else{
    echo "congrats no cookie";
}

?>


<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="style.css">


</head>
<body>
    <center>
        <h3>Login Here</h3>

        <form action="" method="post">

            <table>
                <tr>
                <td>Username:</td>
                <td>
                    <input type="text" name="uname" placeholder="please input your username" required="required" >
                </td>
                </tr>   

                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="passw" placeholder="please input your password" required="required" >
                    </td>
                </tr>

                <tr>
                    <td>
                    <input type="submit" name="submit" value="login">
                    </td>
                </tr>
                
                <tr>
                <td>
                    <a href="register.php">Sign up here</a>
                </td>
                </tr>
            </table>

        </form>
    </center>




<?php

$aID="admin";
$aPWD="12345kk";

//echo time();
//date_default_timezone_set('Asia/Taipei');
//echo date("m-d-Y H:i:s");
//header("Refresh:1");


if(isset($_POST["uname"])){ 
    if($_POST["uname"]!=null){   
    $uID=$_POST["uname"];
    $uPWD=$_POST["passw"];

    //echo $uname."<br/>";
    //echo $passw;

    if($aID==$uID && $aPWD==$uPWD){
        $_SESSION["login"]="Yes";
        //echo "login sucessful";
        setcookie("UID",$uID,time()+17280);
        header('Location:register.php');
    }else{
        echo "wrong username or password";
    }

    }else{
        echo "Please input username and password";
    }
}else{
    echo " no username or password is input";
}
    
//如果出現header already sent
//ob_flush();
?>

</body>


</html>