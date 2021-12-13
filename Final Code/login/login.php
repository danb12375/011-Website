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

			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
  <p>Login Page.</p>
</div>
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login" ><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
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