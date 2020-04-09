<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>
	<div class="container">
	
	<div class="header">
		
		<h2>Sign Up</h2>
		<p class="text=left">Please fill in this form to create an account!</p>
			<hr class="mb-3">
	
	</div>

	<form action="registration.php" method="post">
	
		<?php include('errors.php') ?>

		<div class="form-group input-group">
					<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i> </span> 
				</div>

		
		<div>
			
			<label for="username">Username :</label>
			<input type="text" name="username" required>

		</div>


		<div>
			
			<label for="email">Email :</label>
			<input type="email" name="email" required>

		</div>

		<div>
			
			<label for="password">Password :</label>
			<input type="password" name="password_1" required>

		</div>

		<div>
			
			<label for="password"> Confirm Password :</label>
			<input type="password" name="password_2" required>

		</div>
			<input type="checkbox" name="checkbox" value="check" id="agree" />Already a user? <a href="login.php"><b>login</b></a>
				<hr class="mb-3">
	
		<input class="btn btn-primary" button type="submit" name="create" value="Sign Up"/>

		






	</form>













</div>
</body>