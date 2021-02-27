<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>User Change PassWord .</title>
</head>
<body style="background-color: pink;">
<?php
include("Navigation.php");
?>
	<marquee behavior="alternate" scrollamount="17">
		<h4 style="padding-top: 70px; color:purple;">If Customer Forget There PassWord .</h3>
	</marquee>


	<h1 class="text-center" style="color: #0d78ea; padding-top: -20px;"> User Forget PassWord ! </h1>


<div class="container-fluid "  style="width:740px;  height: 360px;  border-radius:30px;   border:3px solid blue;">
		<marquee  behavior="scroll" scrollamount="10">
		<h5  style="color: #ea0dd4; margin-top: 10px; ">Please Enter Customer UserName Here .</h6>
		</marquee>


		<h1 class="text-center" style="color: red;">Customer UserName</h1>
		
		<center>
		<input  type="text" placeholder="Enter Customer UserName ."  required="required" name="" style="margin-left: 110px; background:transparent;   color: purple; border: none; border-bottom : 1px solid green; width: 270px; outline: none; padding-left: 23px; font-size: 19px;"></input>
		
		<a href="#" style="margin-left: 60px;">
		<button type="button" style="width: 70px; font-size:17px; color: green; background: #f21c9c;"  class="btn-secondary  btn-sm rounded">Ok</button>
		</a>
		</center>
			
			<br>
				<h1 class="text-center" style="color: #ea8e0d;">Customer New PassWord</h1>	
			<input type="PassWord" placeholder="Enter Customer New PassWord ." name=""  required="required" style="margin-left: 200px; background:transparent;   color: purple; border: none; border-bottom: 1px solid green; width: 300px; outline: none; padding-left: 23px; font-size: 19px;"></input>

					<br>
					<br>
			<a href="#" style="margin-left: 301px;">

				<button type="button" style="width: 70px; font-size:17px; color: violet; background: #ea0d0d;"  class="btn-primary  btn-sm rounded" >Submit</button>
			</a>
</div>


<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>