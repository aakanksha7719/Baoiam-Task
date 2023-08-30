<html>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{

$uname=$_POST['username'];
$passname=$_POST['pass'];

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

$sql ="INSERT INTO signup(uname,passname)VALUES('$uname','$passname')";
if (mysqli_query($conn,$sql))

{
    /*
    $sql2="SELECT Username, Pass FROM signin where Username=".$_POST["username"];
    $result = mysqli_query($conn, $sql2);
    while(mysqli_num_rows ( $result )) {
        echo '<script type="text/javascript"> alert("Registered successfully")</script>';
    }
    */
    echo '<script type="text/javascript"> alert("Registered successfully")</script>';
}

mysqli_close($conn);

}
?>
</body>
</html>



