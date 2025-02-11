<!--------- Remote Connection --------->

<?php
$servername = "127.0.0.1";
$username = "remote_user";
$password = "_PassWord@cct";
$dbname = "elearning";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!--------- Local Connection --------->

<!-- <?php
// $servername = "localhost";  // IP Address To Connect To The Database
// $username = "root";
// $password = "";
// $dbname = "elearning"; 

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
?> -->