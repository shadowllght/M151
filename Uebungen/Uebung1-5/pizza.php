<?php
    
    /*if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
    {
        func();
    }
    function func()
    {
        $Zutaten;
        $_SESSION['Zutaten'] += $Zutaten;
        echo "{$Zutaten}" ;
    }*/
?>

<?php
session_start();

$zutaten = $_SESSION['zutaten'];

if(!is_array($zutaten)){
    $_SESSION['zutaten'] =[];
    $zutaten =[];

$neue_zutat = $_POST['topping'];

$zutaten = $neue_zutat;

$_SESSION['zutaten'] = $zutaten;
}

?>
<html>
<body>

<h1>Pizza Konfigurator</h1>

<p>Deine Pizza besteht aus folgenden Toppings:</p>
<ul>
    <?php 
        //foreach($zutaten as $zutat{
                
        //})
    ?>
</ul>

<?php
var_dump();
?>

<p>Füge weitere Zutaten hinzu:</p> 
<form></form>
</body>

</html>