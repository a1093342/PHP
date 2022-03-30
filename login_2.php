<?php
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
</head>

<body>
<center>
<h3>Login</h3>

    <form action="" method="post">
        <table>
        <tr>
                <td>ID:</td>
                <td>
                    <input type="text" name="Uid2" placeholder="please input your ID" required="required" >
                </td>
                </tr>   

                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="Upassw" placeholder="please input your password" required="required" >
                    </td>
                </tr>

                <tr>
                    <td>
                    <input type="submit" name="submit">
                    </td>
                </tr>
        </table>
    </form>
</center>

<?php
$aID="user";
$aPWD="kenzi";

$aID2="admin";
$aPWD2="admin";

if(isset($_POST["Uid2"])){ 
    if($_POST["Uid2"]!=null){   
    $uID=$_POST["Uid2"];
    $uPWD=$_POST["Upassw"];

    //echo $uname."<br/>";
    //echo $passw;

    if($aID==$uID && $aPWD==$uPWD){
        $_SESSION["login"]="Yes";
        //echo "login sucessful";
        setcookie("UID",$uID,time()+17280);
        header('Location:register_2.php');


    }elseif($aID2==$uID && $aPWD2==$uPWD){
        $_SESSION["login"]="Yes";
        //echo "login sucessful";
        setcookie("UID",$uID,time()+17280);
        header('Location:admin.php');


    }else{
        header('Location:home.php');
    }

    }else{
        echo "Please input username and password";
    }
}else{
    echo " no username or password is input";
}


?>
</body>



</html>