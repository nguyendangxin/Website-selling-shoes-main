
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "shoe_store";
// $servername = '127.0.0.1';
// $username = 'hvfuydkq';
// $password = '5Is0B07NyV.tv;';
// $dbname = 'hvfuydkq_db_bookstore';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
