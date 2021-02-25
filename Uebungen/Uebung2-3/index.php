<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //pdo php data object

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<table>
    <tr>
        <td><b>Vorname</b></td>
        <td><b>Nachname</b></td>
        <td><b>Job</b></td>
    </tr>
<?php
 
$sql = "SELECT * FROM customers";
foreach ($conn->query($sql) as $row) { 
    ?>

<tr>
    <td><?= $row['first_name'];?></td>
    <td><?= $row['last_name'];?><br></td>
    <td><a href="bestellungen.php id=<?= ["order"]?>"> </td>
</tr>
<?php
if($_SERVER['REQUEST METHOD'] === 'POST'){

}

$statement ->execute([
  ':first_name'
])
  
?>
</table>
<?php
}
?>