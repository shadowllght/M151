<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        if($username==NULL) echo "Error no name";
        else echo "Hallo {$username}!<br>";
        $class = $_POST['Klasse'];
        echo "Du bist in der Klasse {$class}.";
    }
?>

<form method="POST" action="2">
    <input type="text" name="name" placeholder="Benutzername">
    <select name="Klasse">
        <option value="INF18s">INF18s</option>
        <option value="INF18a">INF18a</option>
        <option value="INF18b">INF18b</option>
        <option value="INF18c">INF18c</option>
    </select>
    <input type="submit" value="Absenden" />
   
</form>