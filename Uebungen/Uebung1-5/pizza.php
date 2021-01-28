<h1>Pizza Konfigurator</h1>
<p>Deine Pizza besteht aus folgenden Toppings:</p>
<p>Füre weitere Zutaten hinzu:</p>  <input type="text" id="fname" name="fname">
<input type="submit" class="button" name="Hinzufügen" value="select"/>
<?php
    
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
    function func()
    {
        $Zutaten;
        $_SESSION['Zutaten'] += $Zutaten;
        echo "{$Zutaten}" ;
    }
?>