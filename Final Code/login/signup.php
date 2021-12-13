<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

		<style>
	
	#text{

		height: 26px;
		border-radius: 6px;
		padding: 5px;
		border: solid thin #aaa;
		width: 99%;
	}

	#button{

		padding: 11px;
		width: 101px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: mediumpurple;
		margin: auto;
		width: 301px;
		padding: 21px;
	}
	
body {
  font-family: Comic Sans MS;
  margin: 0;
}


.header {
  background: black;
  color: white;
  padding: 51px;
  text-align: center;
}


.header h1 {
  font-size: 41px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 13px 21px;
  text-decoration: none;
}


.navbar a.right {
  float: right;
}


.navbar a:hover {
  background-color: #ddd;
  color: black;
}
<style>
table, th, td {
  border: 1px solid black;
}

body 
h1 {
font-family: comicsans;
}
</style>
<div class="header">
  <h1>Daventry University</h1>
  <p>Signup Page.</p>
</div>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Register</div>

			<input id="text" type="text" name="user_name" placeholder="Create a username"><br><br>
			<input id="text" type="text" name="email" placeholder="Enter Your Email"><br><br>
			<input id="text" type="password" name="password" placeholder="Create a password"><br><br>
			<input id="text" type="password" name="confirmpass" placeholder="Confirm password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
<style>
table, th, td {
  border: 2px solid mediumpurple;
}

body {
  background-image: url('http://localhost/img/uniimage.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
h1 {
font-family: comicsans;
}
</style>
</html>