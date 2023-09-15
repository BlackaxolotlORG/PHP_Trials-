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
    echo "<h1>Working with variables</h1>";
    echo "<hr>";
    $phrase = "Hello";
    $integerAge = 45;
    $floatAge = 45.66;
    $booleanisMale = false;
    $booleanRoisMale =  null;
    echo $floatAge;
?>

<?php
    echo "<h1>Working with Strings</h1>";
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

<?php
     echo "<hr>";
     $phrase3 = "Giraffe Academy";
     echo substr($phrase3, 8);
     echo "<br>";
     echo substr($phrase3, 8, 3);
?>
<?php
    echo "<h1>Working with numbers</h1>";
    echo "<hr>";
    echo 456;
    echo "<br>";
    echo 456.99;
    echo "<br>";
    echo 56+40;
    echo "<br>";
    echo"The % sign in php is a mod and it gets the reminder so in this case its 90 divided
    by 4 which in whole numbers can only be divided by 88 so only 2 reamian so it prints that out<br>";
    echo 90%4;
    echo "<br>";
    $num = 10;
    echo $num;
    echo "<br>";
    $num ++;
    echo $num;
    echo "<br>";
    $num = 10;
    $num --;
    echo $num;
    echo "<br>";
    $num = 10;
    $num += 25 ;
    echo $num;
    echo "<br>";
    echo pow(2, 4);
    echo "<br>";
    echo sqrt(144);

?>
<?php
    echo "<h1>Working with User inputs</h1>";
    echo "<hr>";
?>

<form action="Site.php" method="get">
    Name: <input type="text" name="Name"> 
    <input type="submit">
</form>
<br>
Your name is <?php
echo $_GET["Name"]
?>



</body>
</html>