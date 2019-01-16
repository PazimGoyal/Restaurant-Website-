<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">

    <title>ADMIN Moonlight indian Cuisine</title>
        <style>
    
body{
	margin: 0;
	padding: 0;
	background: #fff;
	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image:url(../img/restaurant-wide-hd-wallpaper-download-restaurant-photos-free-best-backgrounds-hd-free-images-widescreen-1920x1200.jpg);
	background-size: cover;
	-webkit-filter: blur(0px);
	z-index: 0;
}

.grad{
padding-right:20px;
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(40% - 255px);
	z-index: 5;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 40px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,1);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,1);
}

.login input[type=submit]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>

    
 
    
  </head>

  <body>

    <div class="body"></div>


<center><strong><h1 style="color:#fff;">Welcome to Moonlight Indian Cuisine</h1></strong></center>

		<div class="header" >

			<div>

            Monlight <br>Indian <br><span> Cuisine</span><br>               
</div>
		</div>
		<br>
		<div class="login"><form method="post" enctype="multipart/form-data">
				<input type="text" placeholder="username" name="user"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login" name="login"></form>	
  <?php

if(isset($_POST["login"])){

$username_enter=$_POST['user'];
$password_enter=$_POST['password'];

$sql = "SELECT user_name,password From Login";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
$username_get=$row['user_name'];
$password_get=$row['password'];
if($username_enter==$username_get&&$password_enter==$password_get){
	echo "Login Successfull";
session_start();
($_SESSION['login']=1);
header("location:admin2.html");

	break;
	}
	echo"invalid ";
	}
	
}}
  ?> </div>
  </body>
</html>
