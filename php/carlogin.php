<?php
session_start();

$con=new mysqli("localhost","root","","userdb");//enter dbname when dbdone

if($con->connect_error)
{
	die("connection failed: ".$con->connect_error);
}
else
{
	$stmt=$con->prepare("select*from user_details where username=?");//enter table name when db done
	$stmt->bind_param("s",$_POST['username']);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows > 0)
	{
		$data=$stmt_result->fetch_assoc();
		if($data['password']===$_POST['password'])
		{
			$_SESSION["uname"]=$_POST['username'];    //session
			$_SESSION["pword"]=$_POST['password'];   //session
			header("location:../UserProfile.php");
			exit;
		}
		else
		{
			echo"<h2>invalid email or password</h2>";
		}
	}		
	else
	{
		echo"<h2>Invalid username or password</h2>";
	}
?>