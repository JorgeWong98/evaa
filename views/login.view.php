<?php include('header.php') ?>

	<div class="container form form-group">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="login">
			<div class="form-group input-group-lg">
    			<label for="user">Username</label>
    			<input type="text" name="user" class="form-control" id="user" placeholder="Username">
  			</div>
  			<div class="form-group input-group-lg">
    			<label for="pass">Password</label>
    			<input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
  			</div>
  			<button type="submit" class="btn btn-primary">Submit</button>
		</form>	
	</div>

<?php include('footer.php') ?>