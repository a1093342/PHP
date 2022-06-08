<?php
session_start();
$con = mysqli_connect("localhost","root","","try");


if(isset($_POST['insert']))
{
    $name = $_POST['name'];
	$choice = $_POST['type'];
	$query = "INSERT INTO 'choice' (name,choice) VALUES ('$name','$choice')";
	$query_run = mysqli_query($con,$query);

	if($query_run)
	{
		$_SESSION['status'] = "inserted successfully";
		header("Location: confirm_1.php");
	}else{
		$_SESSION['status'] = "inserted successfully";
		header("Location: confirm_1.php");
	}

}

?>
