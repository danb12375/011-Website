<!DOCTYPE HTML>

<head>


<style>
body {
  font-family: Comic Sans MS;
  margin: 0;
}

.header {
  background: black;
  color: white;
  padding: 45px;
  text-align: center;
}

.header h1 {
  font-size: 40px;
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

.logout {
    background-color: #333;
    overflow: hidden;
}

.logout a {
  float: right;
  color: white;
  text-align: center;
  padding: 13px 21px;
  text-decoration: none;
  font-size: 17px;
}

.logout a:hover {
  background-color: white;
  color: black;
}

.logout a.active {
  background-color: white;
  color: Black;
}

.logout-right {
  float: right;
}


<style>
table, th, td {
  border: 1px solid black;
}

h1 {
font-family: comicsans;
}
</style>

<style>
table, th, td {
  border: 1px solid black;
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
</style>

<body>

<div class="header">
  <h1>Course Information</h1>
  <p>View and edit course details below.</p>
</div>

<div class="navbar">
  <a href="http://localhost/login/index.php">Homepage</a>
  <a href="http://localhost/navbar/expansion/index.php">Student and Contact Information</a>
  <a href="http://localhost/navbar/expansion2/index.php">Staff and Contact Information</a>
  <a href="http://localhost/navbar/expansion3/index.php">Course Information</a>
  <a href="http://localhost/test/moduleinfo.html">Module's</a>
  <a href="http://localhost/navbar/studentmarks/index.php">Student Marks</a> 
  
</div>


  <div class="logout">
  <a href="logout.php"><style=text-align: right;>Logout</a>

  </div>
    
 </body>
 
</html>

<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM course ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>

<p style="padding: 10px;width: 550px; background: white;border: 2px solid white;">This page allows you to add,view and edit course information, scroll to view more courses</p>

  <p style="padding: 5px;width: 200px; background: white;border: 2px solid white;"><a href="add.html">Add New Data</a><br/><br/></p>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for courses.." title="Type in a course">
    
    <table width='80%' border=0>
        <tr bgcolor='grey'>
            <td>coursecode</td>
            <td>coursetitle</td>
            <td>coursetype</td>
            <td>credits</td>
            <td>numbermodule</td>
            <td>fulltime</td>
            <td>parttime</td>
            <td>courseleader</td>
            <td>Update</td>
        </tr>
        <?php 
      
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr bgcolor='lightgrey'>";
            echo "<td>".$res['coursecode']."</td>";
            echo "<td>".$res['coursetitle']."</td>";
            echo "<td>".$res['coursetype']."</td>"; 
            echo "<td>".$res['credits']."</td>";
            echo "<td>".$res['numbermodule']."</td>";
            echo "<td>".$res['fulltime']."</td>"; 
            echo "<td>".$res['parttime']."</td>";
            echo "<td>".$res['courseleader']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   

        }
        ?>
    </table>

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<div class="row">
  
  <div class="column">
    <a href="http://localhost/test/computing.html">
    <img src="http://localhost/img/Computing.jpg" alt="Computing" style="width:100%">
    <p>Computing </p>
  </div>

  <div class="row">
  
  <div class="column">
    <img src="http://localhost/img/123.jpg" alt="Police" style="width:100%">
    <a href="http://localhost/test/photographyandmedia.html">
    <p>Photography and Media</p>
  </div>
 
  <div class="row">
  
 
  <div class="column">
    <img src="http://localhost/img/1234.jpg" alt="Photo+media" style="width:100%">
    <a href="http://localhost/test/policing.html">
    <p>Policing</p>
  </div>
  
  <div class="row">
  
  <div class="column">
    <a href="http://localhost/test/mp.html">
    <img src="http://localhost/img/zoo1.jpg" alt="zoo" style="width:100%">
    <p>Animal Wellbeing </p>
  </div>

  <div class="row">
  
  <div class="column">
    <img src="http://localhost/img/fashion.jpg" alt="Police" style="width:100%">
    <a href="http://localhost/test/mp.html">
    <p>Fashion</p>
  </div>
 
  <div class="row">
  
 
  <div class="column">
    <img src="http://localhost/img/art1.jpg" alt="art" style="width:100%">
    <a href="http://localhost/test/mp.html">
    <p>Art</p>
  </div>
 
</div>
</body>
</html>

