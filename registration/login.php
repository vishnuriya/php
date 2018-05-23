<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>login</h2>
  </div>
	
  <form method="post" action="Login.php">

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username">
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login">login</button>
  	</div>
  	<p>
  		not yet  a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>