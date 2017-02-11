<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if($conn->connect_error){
//  die("Connection failed:" . $conn->connect_error);
echo "Connection failed:" . $conn->connect_error;
}else {
  echo "connection succeeded";
}

//check whether table exist if it does ignore it if not creat table instead





?>
