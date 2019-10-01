<?php
$error = NULL;
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con, 'details');

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$number=$_POST['Phone']
$password = $_POST['Password'];
$password1 = $_POST['Password1'];
$address = $_POST['Address']
$vkey = md5(time().$email);

$s="select * from regista where email= '$email' && Password='$password'";

$result = mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($password1 != $password){
	$error .= "<p> Your passwords don't match</p>";
}
else if ($numm==1) {
	echo "Email exists";
}
else{
   $reg = "insert into regista(Name, Email, Number, Password, Password1, Address, vkey) values ('$name','$email', '$number', '$password', '$password1', '$address', '$vkey')";

$to = $email;
$subject ="Email verification";
$message = "<a href = 'http://localhost/signup/registeration.php?vkey=$vkey'>Register account</a>";
$header = "From: phpbasics@gmail.com \r\n";

mail($to, $subject, $message, $header);

          mysqli_query($con, $reg);
          header("location:Login.php");
        }
?>
