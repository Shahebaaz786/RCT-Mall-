<!DOCTYPE html>
<html>
<head>
	<title>Admin Sign In Here !</title>
	<link rel="stylesheet" type="text/css" href="css/Admin.css">
	<link rel="stylesheet" type="text/css" href="css/Info.css">
</head>
<body>

<?php
include("Navigation.php");
?>

<div class="LoginBox">
	
			<img src="RCTMall/ss.jpg" class="user">
		<form >

<h2 style="color: red;"> Admin Log In Here !</h2>
			<p style="margin-left: 50px; color: orange;">
				<img src="RCTMall/Admin-6.png" style="width: 46px; height: 39px; font-size: 19px; ">&nbsp;UserName</p>

			<input  type="text" placeholder=" Enter Admin UserName" name="" required="required"  style="margin-left:20px; width: 310px; color: pink;">
			<p  style="margin-left: 50px; color: orange;">
				<img src="RCTMall/Password.png" style="width: 38px; height: 33px; font-size: 19px;">&nbsp;&nbsp;PassWord</p>
			<input  type="password" placeholder="&nbsp;Enter Admin PassWord" name=""  required="required" style="margin-left:20px; width: 310px; color: pink;">
			<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input  style="width: 230px;" type="submit" value="Sign In" name="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="Admin Forget Password.php" style="text-decoration: none; font-size: 16px; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ForGet PassWord !</a>
			<br>
			
			<a class="signout" href="" style="text-decoration: none;  font-size: 24px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>Sign-Out</u>
			</a>
			
			</form>

</div>

</body>
</html>