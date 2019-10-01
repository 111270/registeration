<!DOCTYPE HTML>  
<html>
<head>
	<title>Registeration</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="Login-box">
		<div class="row">
			<div class="col-md-6">

<h2>Register</h2>
<form action="registeration.php" method="post">
<div class="form-group">
<label>Name</label>
 <input type="text" id="user_name" placeholder="Full name" required autofocus value="John Doe">
<br>

<label>Email</label>
 <input type="email" id="user_email" placeholder="Email" required value="john@doe.com">
<br>
<label>Number</label>

<select>
	<option>+254</option>
<input type="Number" name="Phone" class="form-control" placeholders="793672****" required value="12345">
<br>
<label>Password</label>
<input type="Password" name="Password" class="form-control" required>
<br>
<label>Confirm Password</label>
<input type="Password" name="Password1" class="form-control" required>
<br>

<label>Address</label>
<input type="text" name="Address" class="form-control" required>
<button type="submit" class="btn btn-primary">Register</button>
<button type="signin" class="btn btn-primary">Sign in<a href="Login.php"></a></button>
</form>
</div>
</div>


</body>>
</html>
