
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "shoe_store";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
