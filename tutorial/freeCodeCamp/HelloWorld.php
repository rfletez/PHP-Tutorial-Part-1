<?php
//Use 'php -S localhost:5000' on Terminal in this directory.
//This will run php files.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mike Tutorial</title>
</head>

<body>
    <?php
        echo("Hello World!!! <br>");

        $characterName="John";
        $characterAge=60;

        echo("There was a man named $characterName, 
            and he was $characterAge years old.");

        //Data Types
        $phrase = "To be or not to be.";
        $age = 36;
        $isAlive = true;

        //Strings
        $favoriteBook = strtoupper("the lord of the rings");
        $favoriteSnack = strtolower("APPLE");

        echo("First letter in favorite book: " + $favoriteBook[0] + " and length of title: " 
            + strlen($favoriteBook));
        
        str_replace("the lord of the rings", "The Silmarillion", $favoriteBook);

        echo(`New favorite book is $favoriteBook`);

        echo(substr($favoriteBook, 0, 5));

        //Working with Numbers
        $num1 = 10;
        echo(($num1 + 15) * 30 - 7);

        echo(abs(-100));
        echo(pow(2, 4));
        echo(sqrt(144));
        echo(min(-5, -9));

        echo("Rounded number: " + round(3.4));
        echo(ceil(4.5));
        echo(floor(4.5));
    ?>
</body>
</html>