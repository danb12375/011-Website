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
  <h1>Student Marks</h1>
  <p>View and edit student marks below.</p>
</div>

<div class="navbar">
  <a href="http://localhost/login/index.php">Homepage</a>
  <a href="http://localhost/navbar/expansion/index.php">Student and Contact Information</a>
  <a href="http://localhost/navbar/expansion2/index.php">Staff and Contact Information</a>
  <a href="http://localhost/navbar/expansion3/index.php">Course Information</a>
  <a href="http://localhost/test/moduleinfo.html">Module's</a>
  <a href="http://localhost/test/studentmarks.html">Student Marks</a>
  
</div>


  <div class="logout">
  <a href="logout.php"><style=text-align: right;>Logout</a>

  </div>
    
 </body>
 
</html>

<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM studentmarks ORDER BY id DESC");
?>

<html>
<head>  
    <title>Homepage</title>
</head>

<body>

<p style="padding: 10px;width: 550px; background: white;border: 2px solid white;">This page allows you to add,view and edit student marks</p>

  <p style="padding: 5px;width: 200px; background: white;border: 2px solid white;"><a href="add.html">Add New Data</a><br/><br/></p>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    
    <table width='80%' border=0>
        <tr bgcolor='grey'>
            <td>Studentname</td>
            <td>StudentID</td>
            <td>010</td>
            <td>011</td>
            <td>020</td>
            <td>021</td>
            <td>030</td>
            <td>031</td>
            <td>Update</td>
        </tr>
        <?php 
         
      
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr bgcolor='lightgrey'>";
            echo "<td>".$res['studentname']."</td>";
            echo "<td>".$res['studentid']."</td>";
            echo "<td>".$res['a010']."</td>"; 
            echo "<td>".$res['a011']."</td>";
            echo "<td>".$res['a020']."</td>";
            echo "<td>".$res['a021']."</td>"; 
            echo "<td>".$res['a030']."</td>";
            echo "<td>".$res['a031']."</td>";
            echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   

        }
        ?>
    </table>
</body>

</html>

