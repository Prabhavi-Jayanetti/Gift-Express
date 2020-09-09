<?php        
	session_start();
	
	$username="";
	$email="";
	
	/*errors in array*/
	
	$errors=array();
	
	/*connect to db*/
	
	$db=mysqli_connect('localhost','root','','giftexpress') or die("Could not connect to the db");

	
	if(isset($_POST['login']))
	{
		$username= mysqli_real_escape_string($db, $_POST['username']);
		$password=mysqli_real_escape_string($db, $_POST['password']);
		
		if(empty($username))
		{
			array_push($errors,"User Name is Required.");
		}
		if(empty($password))
		{
			array_push($errors,"Password is Required.");
		}
		if(count($errors)==0)
		{
			$password=md5($password);
		}
		$query="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		
		if(mysqli_num_rows($results))
		{
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now login in.";
			header('location: index.html');
		}else{
			array_push($errors,"Wrong Username/Password, Please try again.");
		}
	}
	
	
?>	
	
	
	
	
	
	
	
	