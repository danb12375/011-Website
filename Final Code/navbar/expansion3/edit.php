<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $coursecode=$_POST['coursecode'];
    $coursetitle=$_POST['coursetitle'];
    $coursetype=$_POST['coursetype'];
    $credits=$_POST['credits'];
    $numbermodule=$_POST['numbermodule'];
    $fulltime=$_POST['fulltime']; 
    $parttime=$_POST['parttime'];
    $courseleader=$_POST['courseleader'];
    
    if(empty($coursecode) || empty($coursetitle) || empty($coursetype) || empty($credits) || empty($numbermodule) || empty($fulltime) || empty($parttime) || empty($courseleader)) {          
        if(empty($coursecode)) {
            echo "<font color='red'>CourseCode field is empty.</font><br/>";
        }
        
        if(empty($firstname)) {
            echo "<font color='red'>CourseTitle field is empty.</font><br/>";
        }
        
        if(empty($surname)) {
            echo "<font color='red'>CourseType field is empty.</font><br/>";
        }       
        if(empty($birthyear)) {
            echo "<font color='red'>Credits field is empty.</font><br/>";
        } 
        if(empty($email)) {
            echo "<font color='red'>NumberModule field is empty.</font><br/>";
        } 
        if(empty($address)) {
            echo "<font color='red'>Fulltime field is empty.</font><br/>";
        } 
        if(empty($phone)) {
            echo "<font color='red'>PartTime field is empty.</font><br/>";
        } 
         if(empty($startyear)) {
            echo "<font color='red'>Courseleader field is empty.</font><br/>";
        }
    } else {    
        $result = mysqli_query($mysqli, "UPDATE course SET coursecode='$coursecode',coursetitle='$coursetitle',coursetype='$coursetype' ,credits='$credits' ,numbermodule='$numbermodule' ,fulltime='$fulltime' ,parttime='$parttime' ,courseleader='$courseleader' WHERE id=$id");
        
        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM course WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $coursecode= $res['coursecode'];
    $coursetitle = $res['coursetitle'];
    $coursetype = $res['coursetype'];
    $credits = $res['credits'];
    $numbermodule = $res['numbermodule'];
    $fulltime = $res['fulltime'];
    $parttime = $res['parttime'];
    $courseleader = $res['courseleader'];
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
                <td>coursecode</td>
                <td><input type="text" name="coursecode" value="<?php echo $coursecode;?>"></td>
            </tr>
            <tr> 
                <td>coursetitle</td>
                <td><input type="text" name="coursetitle" value="<?php echo $coursetitle;?>"></td>
            </tr>
            <tr> 
                <td>coursetype</td>
                <td><input type="text" name="coursetype" value="<?php echo $coursetype;?>"></td>
            </tr>
            <tr> 
                <td>credits</td>
                <td><input type="text" name="credits" value="<?php echo $credits;?>"></td>
            </tr>
            <tr> 
                <td>numbermodule</td>
                <td><input type="text" name="numbermodule" value="<?php echo $numbermodule;?>"></td>
            </tr>
            <tr> 
                <td>fulltime</td>
                <td><input type="text" name="fulltime" value="<?php echo $fulltime;?>"></td>
            </tr>
           <tr> 
                <td>parttime</td>
                <td><input type="text" name="parttime" value="<?php echo $parttime;?>"></td>
            </tr>
            <tr> 
                <td>courseleader</td>
                <td><input type="text" name="courseleader" value="<?php echo $courseleader;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>

 

</body>
</html>