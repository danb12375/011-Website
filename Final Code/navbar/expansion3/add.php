<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {   
    $coursecode = $_POST['coursecode'];
    $coursetitle = $_POST['coursetitle'];
    $coursetype = $_POST['coursetype'];
    $credits = $_POST['credits'];
    $numbermodule = $_POST['numbermodule'];
    $fulltime = $_POST['fulltime'];
    $parttime = $_POST['parttime'];
    $courseleader = $_POST['courseleader'];

    if(empty($coursecode) || empty($coursetitle) || empty($coursetype) || empty($credits) || empty($numbermodule) || empty($fulltime) || empty($parttime) || empty($courseleader)) {       

        if(empty($coursecode)) {
            echo "<font color='red'>coursecode field is empty.</font><br/>";
        }
        
        if(empty($coursetitle)) {
            echo "<font color='red'>coursetitle field is empty.</font><br/>";
        }
        
        if(empty($coursetype)) {
            echo "<font color='red'>coursetype field is empty.</font><br/>";
        }
        if(empty($credits)) {
            echo "<font color='red'>credits field is empty.</font><br/>";
        }
        
        if(empty($numbermodule)) {
            echo "<font color='red'>numbermodule field is empty.</font><br/>";
        }
        
        if(empty($fulltime)) {
            echo "<font color='red'>fulltime field is empty.</font><br/>";
        }

        if(empty($parttime)) {
            echo "<font color='red'>parttime field is empty.</font><br/>";
        }

        if(empty($courseleader)) {
            echo "<font color='red'>courseleader field is empty.</font><br/>";
        }
        
        
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        $result = mysqli_query($mysqli, "INSERT INTO course(coursecode,coursetitle,coursetype,credits,numbermodule,fulltime,parttime,courseleader) VALUES('$coursecode','$coursetitle','$coursetype' ,'$credits' ,'$numbermodule' ,'$fulltime' ,'$parttime' ,'$courseleader')");
        
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>