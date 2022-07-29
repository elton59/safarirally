<?php
include("../header.php");
include("../herosection.php");

?>
<!DOCTYPE html>
<!--www.codingflicks.com--> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Safari Rally Log in</title>

		  <!-- Vendor CSS Files -->
		  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
   <!-- Template Main CSS File -->
   <link href="../assets/css/style.css" rel="stylesheet">
	<style>
		
        * {
	box-sizing: border-box;
}
body {
	font-family: poppins;
	font-size: 16px;
	color: #fff;
}
.form-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: 260;
	
	left: 0;
	right: 0;
	width: 100%;
	height: 100%;
}
.form-box:before {
	
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.form-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}
.form-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;

	font-size: 18px;
	font-family: poppins;
}
.form-box input[type=checkbox] {
	display: none;
}
.form-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.form-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}
.form-box input[type=checkbox]:checked+label:before {
	content: "\2713";
	font-size: 20px;
	color: #000;
	text-align: center;
	line-height: 20px;
}
.form-box span {
	font-size: 14px;
}
.form-box button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 100%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}
span a {
	color: #BBB;
}

        </style>
</head>
<body>
	<div class="form-box">
		<div class="header-text">
			Signup Form
		</div>
		<form class="form-horizontal " method="POST" action="process.php">
               
			   <div class="form-group">
				 <div class="col-sm-10">
				   <input  name="finem"type="email" class="form-control round-input" placeholder="input email" required>
				 </div>
			   </div>
			   <div class="form-group">
				 <div class="col-sm-10">
				   <input name="finpass" type="password" class="form-control round-input" placeholder="input Password" required>
				 </div>
			   </div>
			   <div class="form-group">
				
				<div class="col-sm-10">
				  <input type="password" class="form-control" placeholder="confirm password" required  minlength="5"  maxlength="12"   style="background-color:#ddd" id="myInput" onkeyup='check()' >
				</div>
			  </div>
			  <div class="form-group">
				
				<div class="col-sm-10">
			  <button type="button"  class="form-control" style="color:red" onclick="myFunction()" id="myInput"><p style="color:black"> Show Password 
			  </div>
			  </div>
			   <center>
			   <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="afin" value="Create"/>
				<input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="reset" value="Cancel"/></center>
			 </form>
	</div>
</body>
<script>
	
var check = function() {
  if (document.getElementById('myInput').value ==
    document.getElementById('cmyInput').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
<script src="../assets/js/main.js"></script>
</html>
