<?php
	include 'header.php';
?>

	<?php
		if(isset($_SESSION['id'])){
			echo $_SESSION['id'];
		}else{
			echo "
				<form action='includes/signup.inc.php' method='POST'>
					<input type='text' name='first' placeholder='First Name'/><br/>
					<input type='text' name='last' placeholder='Last Name'/><br/>
					<input type='text' name='uid' placeholder='Username'/><br/>
					<input type='password' name='pwd' placeholder='Password'/><br/>
					<button type='submit'>SIGN UP</button>
				</form>
				";
			}
	?>

</body>
</html>