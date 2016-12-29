<?php
	session_start();
	include '../dbh.php';

	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
	$result = $conn->query($sql);

	if(!$row=mysqli_fetch_assoc($result)){
		echo "Your Username or Password is Incorrect!";
	}else{
		$_SESSION['id'] = $row['id'];
	}

	header("location: ../index.php");
?>