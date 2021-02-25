<?php
require 'DB.php';
$db = DB::get();
?>


<table>
<tr>
    <td><b>Vorname</b></td>
    <td><b>Nachname</b></td>
    <td><b>Job title</b></td>
</tr>
<?php


$sql = "SELECT * FROM customers";
foreach (select($sql,[]) as $row) { ?>
<table>
<tr>
<td><?= $row['first_name'];?></td>
<td><?= $row['last_name'];?></td>
<td><?= $row['job_title'];?></td>
</tr>
</table>
<?php
}
?>
