<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 

    <title>
        Php website one
    </title>
</head>
<body>
    <?php
    echo "<h1>hello world</h1>";
    echo "<hr>";
    echo"<p>Welcome to my new website</p>";
    ?>

<?php
    $characterName = "John";
    $characterAge = 35;
    $characterLocation = "Ocean";
    echo "<h1>This is a story to see variables in PHP</h1>";
    echo "<hr>";
    echo"There once was a man named  $characterName <br>";
    echo"He lived in a $characterLocation<br>";

    $characterLocation = "City";
    echo"He was $characterAge years old and was never ill<br>";
    echo"So he left the $characterLocation to live his years elsewhere<br>";
    ?>

<?php
    echo "<hr>";
    $phrase = "Hello";
    $integerAge = 45;
    $floatAge = 45.66;
    $booleanisMale = false;
    $booleanRoisMale =  null;
    echo $floatAge;
?>

<?php
    echo "<hr>";
    echo strtolower($phrase);
    echo "<br>";
    echo strtoupper($phrase);
    echo "<br>";
    echo strlen($phrase);
    echo "<br>";
    echo $phrase[0];
    echo "<br>";
    echo strtoupper($phrase[0]);
    echo strtolower($phrase[2]);
    echo "<br>";
    $phrase2 = "Giraffe academy";
    echo $phrase2[0] = "B";
    echo "<br>";
    echo $phrase2;
?>
<?php
     echo "<hr>";
     $phrase3 = "Giraffe academy";
     echo str_replace("Giraffe", "Panda", $phrase3);

?>
</body>
</html>