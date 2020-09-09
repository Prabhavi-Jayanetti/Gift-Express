<?php include('registration1.php')?>

<html>
	<head>
		<title> Registration Form </title>
		<link rel = "stylesheet" href = "loginstyle.css">
		<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">	
	</head>
	
	<body>
		<div class = "top-nav-bar"> 
			<div class = "Search-box">
				<h1>Gift Express</h1>
				<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
				<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
			

			</div>
		</div>
		
		<div class="container">
			<div class="Signup-box ">
				<div class="header">
					<h2><b> SignUp Here</b></h2>
				</div>
				
				<form action="registration1.php" method="post">
				<table>
				
					<div class="form-group">
						<tr>
							<td><label><b>User Name</b><label></td>
							<td><input type="text" name="username" class="form-control" required></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td><label><b>Email</b><label></td>
							<td><input type="text" name="email" class="form-control" required></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td><label><b>Password</b><label></td>
							<td><input type="text" name="password_1" class="form-control" required></td>
						</tr>
					</div>
					<div class="form-group">
						<tr>
							<td><label><b>Confirm Password</b><label></td>
							<td><input type="text" name="password_2" class="form-control" required></td>
						</tr>
					</div>
				</table>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</body>
</html>