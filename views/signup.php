<?php 
	
	include 'main_header.php';
	require_once '../controllers/usercontroller.php';

?>

<!--sign up starts -->
<div class="center-login">
	<h1 class="text text-center">Sign Up</h1>
	<form action="" class="form-horizontal form-material" method="post">
		<div class="form-group">
			<h4 class="text">Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>" class="form-control">
			<span style="color:red"><?php echo $err_name; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" class="form-control">
			<span style="color:red"><?php echo $err_username; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Email</h4> 
			<input type="text" name="email" class="form-control">
			<span style="color:red"><?php echo $err_email; ?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" class="form-control">
			<span style="color:red"><?php echo $err_password; ?></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-success" name="sign_up" value="Sign Up" class="form-control">
		</div>
</div>

<!--sign up ends -->
<?php include 'main_footer.php';?>