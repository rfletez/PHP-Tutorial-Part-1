<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>

<body>

    <form action="UserInput.php" method="get">
        Name: <input type="text" name="username"/>
        <br>
        Age: <input type="number" name="userage"/>
        <button type="submit">Submit</button>
    </form>
    <br>

    Your name is <?php echo($_GET["username"]); ?>
    and your age is <?php echo($_GET["userage"]); ?>


    <h3>Building Calculator</h3>
    <form action="UserInput.php" method="get">
        Num1: <input type="number" name="num1" />
        <br>
        Num2: <input type="number" name="num2" />
        <br>

        <input type="submit" />
    </form>

    Answer: <?php echo($_GET["num1"] + $_GET["num2"]); 
    //Check the URL after submitting.
    ?>


    <!--URL Parameters and GET & POST -->
    <h3>POST Method example</h3>
    <form action="UserInput.php" method="post">
        password: <input type="password" name="password" />
        <br>

        <input type="submit" />
    </form>

    <?php
    /*GET is less secured, by showing the data in the URL parameters
    and letting the users see it whenever they want. POST method is more secured
    between client and server and it will not display anything in the URL. */
        echo($_POST["password"]);
    ?>
</body>
</html>