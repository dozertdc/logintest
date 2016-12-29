<?php
	include '../dbh.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

	if(empty($first)){
		header("location: ../signup.php?error=empty");
		exit();
	}
	if(empty($last)){
		header("location: ../signup.php?error=empty");
		exit();
	}
	if(empty($uid)){
		header("location: ../signup.php?error=empty");
		exit();
	}
	if(empty($pwd)){
		header("location: ../signup.php?error=empty");
		exit();
	}
	else{
		$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
		$result = $conn->query($sql);
		header("location: ../index.php");
	}

?>