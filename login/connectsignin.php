<html>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

$Name=$_POST['firstname'];
$Email=$_POST['email'];
$Username=$_POST['username'];
$Pass=$_POST['pass'];
$Repassword=$_POST['repass'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
die ("Connection failed: ". $conn->connect_error);
}

$sql ="INSERT INTO signin(Name,Email,Username,Pass,Repassword) VALUES('$Name','$Email','$Username','$Pass','$Repassword')";
if (mysqli_query($conn,$sql))
{
 
 echo '<script type="text/javascript"> alert("Registered successfully")</script>';

} else {

 echo '<script type="text/javascript"> alert("Your request could not be accepted: ".mysqli_error ($conn)</script>';
 
}

mysqli_close($conn);

}
?>
</body>
</html>