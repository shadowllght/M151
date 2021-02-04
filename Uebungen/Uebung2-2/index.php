<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //pdo php data object

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";

  $sql = "SELECT * FROM users";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

 
$sql = "SELECT * FROM customers";
foreach ($conn->query($sql) as $row) { ?>
<table>
<tr>
    <td><?= $row['first_name'];?></td>
    <td><?= $row['last_name'];?></td>
</tr>
</table>
<?php
}
?>