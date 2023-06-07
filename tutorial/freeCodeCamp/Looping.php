<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Sections</title>
</head>

<body>
    <form action="Looping.php" method="post">
        What was your grade? 
        <input type="text" name="grade" />
        <input type="submit" />
    </form>

    <?php
        $grade = $_POST["grade"];

        switch($grade) {
            case "A":
                echo("You did amazing!");
                break;
            case "B":
                echo("You did alright.");
                break;
            case "C":
                echo("You could do better next time.");
                break;
            case "D":
                echo("You need to spend more time studying.");
                break;
            default:
                echo("You failed this class.");
        }

        $luckyNumbers = array(1, 14, 17, 8, 25, 36, 50, 1011);
        for($x = 0; $x < count($luckyNumbers); $x++) {
            echo("$luckyNumbers[$x] <br>");
        }
    ?>
    
</body>
</html>