<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully\n";

mysqli_select_db($conn, dbname, 'northwind');

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo $result->num_rows . "Resultate";
} else {
  echo "Keine Resultate vorhanden";
}

//var_dump($result);

mysqli_connect_error($conn);
?>