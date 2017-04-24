
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$servername = "localhost";
$username = "root";
$password = "";
$database = "nextcare";
//create connection
$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error);

}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
$folder = "img/";

$name=$_POST['name'];
$data=$_POST['data'];
$test=$_POST['test'];

move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);

$sql="INSERT INTO uploaddata(name,image,data,test) 
	                VALUES ('$name','{$_FILES['filep']['name']}','$data','$test')";
$result=mysqli_query($conn,$sql);

if($result) { 
    echo "<script>alert(\"Uploded\")</script><br>"; 

header("Location: document.php");
 }
else {

//Gives and error if its not
echo "<script>alert(\"sorry\")</script><br>";
header("Location: document.php");
}
}
}
?>