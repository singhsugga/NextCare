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
else
{

$name=$_POST['name'];
$data=$_POST['data'];
$weight=$_POST['weight'];
$test=$_POST['test'];
$sql="INSERT INTO userdata(name,weight,data,test) 
	                VALUES ('$name','$weight','$data','$test')";
                    if ($conn->query($sql) === TRUE) 
{
    
header("Location: paga.php");
}
else{
    
echo "<script>alert(\"sorry\")</script><br>";
header("Location: paga.php");
}
}
}
?>