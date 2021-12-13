<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {   
    $studentname = $_POST['studentname'];
    $studentid = $_POST['studentid'];
    $a010 = $_POST['a010'];
    $a011 = $_POST['a011'];
    $a020 = $_POST['a020'];
    $a021 = $_POST['a021'];
    $a030 = $_POST['a030'];
    $a031 = $_POST['a031'];

    if(empty($studentname) || empty($studentid) || empty($a010) || empty($a011) || empty($a020) || empty($a021) || empty($a030) || empty($a031)) {       

        if(empty($studentname)) {
            echo "<font color='red'>StudentName field is empty.</font><br/>";
        }
        
        if(empty($studentid)) {
            echo "<font color='red'>StudentID field is empty.</font><br/>";
        }
        
        if(empty($a010)) {
            echo "<font color='red'>010 field is empty.</font><br/>";
        }
        if(empty($a011)) {
            echo "<font color='red'>011 field is empty.</font><br/>";
        }
        
        if(empty($a020)) {
            echo "<font color='red'>020 field is empty.</font><br/>";
        }
        
        if(empty($a021)) {
            echo "<font color='red'>021 field is empty.</font><br/>";
        }

        if(empty($a030)) {
            echo "<font color='red'>030 field is empty.</font><br/>";
        }
        if(empty($a031)) {
            echo "<font color='red'>031 field is empty.</font><br/>";
        }
        
        
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        $result = mysqli_query($mysqli, "INSERT INTO studentmarks(studentname,studentid,a010,a011,a020,a021,a022,a030,a031) VALUES('$studentname','$studentid','$a010' ,'$a011' ,'$a020' ,'$a021' ,'$a030' ,'$a031')");
        
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>