<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {   
    $staffid = $_POST['staffid'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $birthyear = $_POST['birthyear'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $startyear = $_POST['startyear'];

    if(empty($staffid) || empty($firstname) || empty($surname) || empty($birthyear) || empty($email) || empty($address) || empty($phone) || empty($startyear)) {       

        if(empty($staffid)) {
            echo "<font color='red'>StaffID field is empty.</font><br/>";
        }
        
        if(empty($firstname)) {
            echo "<font color='red'>firstname field is empty.</font><br/>";
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
        
        
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        $result = mysqli_query($mysqli, "INSERT INTO staff(staffid,firstname,surname,birthyear,email,address,phone,startyear) VALUES('$staffid','$firstname','$surname' ,'$birthyear' ,'$email' ,'$address' ,'$phone' ,'$startyear')");
        
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>