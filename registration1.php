<?php        
	session_start();
	
	$username="";
	$email="";
	
	/*errors in array*/
	
	$errors=array();
	
	/*connect to db*/
	
	$db=mysqli_connect('localhost','root','','giftexpress') or die("Could not connect to the db");
	
	if(isset($_POST['submit']))
	{
		$username= mysqli_real_escape_string($db, $_POST['username']);
		$email= mysqli_real_escape_string($db, $_POST['email']);
		$password_1=mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2=mysqli_real_escape_string($db, $_POST['password_2']);
	
		/*validations*/
	
		if(empty($username))
		{
			array_push($errors,"User Name is Required.");
		}
		if(empty($email))
		{
			array_push($errors,"Email is Required.");
		}
		if(empty($password_1))
		{
			array_push($errors,"Password is Required.");
		}
		if($password_1 != $password_2)
		{
			array_push($errors,"Passwords need to be same.");
		}
		
		/*validate existing username */
		
		$user_check_query = "SELECT * FROM user WHERE username='$username' or email='$email' LIMIT 1";
		
		$results =mysqli_query($db, $user_check_query);
		$user = mysqli_fetch_assoc($results);
		
		if($user)
		{
			if($user['username'] === $username)
			{
				array_push($errors,"User name is already existing.");
			}
			if($user['email'] === $email)
			{
				array_push($errors,"Email is already existing.");
			}
		}
		if(count($errors)==0)
		{
			$password = md5($password_1); /*encript the password */
			$query = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
			
			mysqli_query($db, $query);
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now login in.";
			
			header('location: login.php');
		
		}
	}
?>	
	
	
	
	
	
	
	
	