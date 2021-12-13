<?php

include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $staffid=$_POST['staffid'];
    $firstname=$_POST['firstname'];
    $surname=$_POST['surname'];
    $birthyear=$_POST['birthyear'];
    $email=$_POST['email'];
    $address=$_POST['address']; 
    $phone=$_POST['phone'];
    $startyear=$_POST['startyear'];
    

    if(empty($staffid) || empty($firstname) || empty($surname) || empty($birthyear) || empty($email) || empty($address) || empty($phone) || empty($startyear)) {          
        if(empty($staffid)) {
            echo "<font color='red'>Staffid field is empty.</font><br/>";
        }
        
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty.</font><br/>";
        }
        
        if(empty($surname)) {
            echo "<font color='red'>Surname field is empty.</font><br/>";
        }       
        if(empty($birthyear)) {
            echo "<font color='red'>Birthyear field is empty.</font><br/>";
        } 
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        } 
        if(empty($address)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        } 
        if(empty($phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        } 
         if(empty($startyear)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }
    } else {    
  
        $result = mysqli_query($mysqli, "UPDATE staff SET staffid='$staffid',firstname='$firstname',surname='$surname' ,birthyear='$birthyear' ,email='$email' ,address='$address' ,phone='$phone' ,startyear='$startyear' WHERE id=$id");
        
       
        header("Location: index.php");
    }
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM staff WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $staffid= $res['staffid'];
    $firstname = $res['firstname'];
    $surname = $res['surname'];
    $birthyear = $res['birthyear'];
    $email = $res['email'];
    $address = $res['address'];
    $phone = $res['phone'];
    $startyear = $res['startyear'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Return to table</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>StaffID</td>
                <td><input type="text" name="staffid" value="<?php echo $staffid;?>"></td>
            </tr>
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
            </tr>
            <tr> 
                <td>Surname</td>
                <td><input type="text" name="surname" value="<?php echo $surname;?>"></td>
            </tr>
            <tr> 
                <td>Birthyear</td>
                <td><input type="text" name="birthyear" value="<?php echo $birthyear;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address;?>"></td>
            </tr>
           <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
            </tr>
            <tr> 
                <td>StartYear</td>
                <td><input type="text" name="startyear" value="<?php echo $startyear;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

 

</body>
</html>