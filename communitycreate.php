<!DOCTYPE html>
<html>
<head>

	<title>Register your community</title>
	  <link rel="stylesheet" href="style.css">

</head>
<body style="background-image: community.jpg">
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="registerval.php">
	<div class="input-group">
		<label>Name of community</label>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Address</label>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Passcode</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Add</button>
	</div>
	</form>
</body>
</html>
