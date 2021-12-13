<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    
    $studentname=$_POST['studentname'];
    $studentid=$_POST['studentid'];
    $a010=$_POST['a010'];
    $a011=$_POST['a011'];
    $a020=$_POST['a020'];
    $a021=$_POST['a021']; 
    $a030=$_POST['a030'];
    $a031=$_POST['a031'];
    
    if(empty($studentname) || empty($studentid) || empty($a010) || empty($a011) || empty($a020) || empty($a021) || empty($a030) || empty($a031)) {          
        if(empty($studentname)) {
            echo "<font color='red'>Staffid field is empty.</font><br/>";
        }
        
        if(empty($studentid)) {
            echo "<font color='red'>Firstname field is empty.</font><br/>";
        }
        
        if(empty($a010)) {
            echo "<font color='red'>Surname field is empty.</font><br/>";
        }       
        if(empty($a011)) {
            echo "<font color='red'>Birthyear field is empty.</font><br/>";
        } 
        if(empty($a020)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        } 
        if(empty($a021)) {
            echo "<font color='red'>Address field is empty.</font><br/>";
        } 
        if(empty($a030)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        } 
         if(empty($a031)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }
    } else {    
        $result = mysqli_query($mysqli, "UPDATE studentmarks SET studentname='$studentname',studentid='$studentid',a010='$a010' ,a011='$a011' ,a020='$a020' ,a021='$a021' ,a030='$a030' ,a031='$a031' WHERE id=$id");
        
        header("Location: index.php");
    }
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM studentmarks WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $studentname= $res['studentname'];
    $studentid = $res['studentid'];
    $a010 = $res['a010'];
    $a011 = $res['a011'];
    $a020 = $res['a020'];
    $a021 = $res['a021'];
    $a030 = $res['a030'];
    $a031 = $res['a031'];
}
?>
<html>
<head>  
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>StudentName</td>
                <td><input type="text" name="studentname" value="<?php echo $studentname;?>"></td>
            </tr>
            <tr> 
                <td>Student ID</td>
                <td><input type="text" name="studentid" value="<?php echo $studentid;?>"></td>
            </tr>
            <tr> 
                <td>010</td>
                <td><input type="text" name="a010" value="<?php echo $a010;?>"></td>
            </tr>
            <tr> 
                <td>011</td>
                <td><input type="text" name="a011" value="<?php echo $a011;?>"></td>
            </tr>
            <tr> 
                <td>020</td>
                <td><input type="text" name="a020" value="<?php echo $a020;?>"></td>
            </tr>
            <tr> 
                <td>021</td>
                <td><input type="text" name="a021" value="<?php echo $a021;?>"></td>
            </tr>
           <tr> 
                <td>030</td>
                <td><input type="text" name="a030" value="<?php echo $a030;?>"></td>
            </tr>
            <tr> 
                <td>031</td>
                <td><input type="text" name="a031" value="<?php echo $a031;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>


</body>
</html>