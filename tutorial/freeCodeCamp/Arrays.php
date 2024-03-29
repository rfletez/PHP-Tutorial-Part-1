<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
        $friends = array("Josh", 1, false, "Mike", "Alan", "Rachel", true);
        echo(`First friend is $friends[0]`);
        $friends[2] = "Kyle";
        $friends[6] = "Maggie";
        $friends[7] = "Sam";
        echo("Number of friends: " + count($friends));
    ?>

    <!--Using Checkboxes example-->
    <h3>Using Checkboxes</h3>
    <form action="Arrays.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples" /> 
        Bananas: <input type="checkbox" name="fruits[]" value="bananas" /> 
        Oranges: <input type="checkbox" name="fruits[]" value="oranges" /> 
        Watermelons: <input type="checkbox" name="fruits[]" value="watermelons" /> 
        <br>
        <button>Submit</button>
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo($fruits[0]);
    ?>


    <!--Using Associative Arrays-->
    <h3>Using Associative Arrays</h3>
    <form action="Arrays.php" method="post">
        Student Name: <input type="text" name="student" />
        <button>Submit</button>
    </form>

    <?php
        //Associative Arrays: storing key-value pairs inside an array.
        $grades = array("Jim"=>"A+", "Carol"=>"B-", "Tim"=>"C", "Oscar"=>"C+");
        $grades["Marcus"] = "F";

        echo("Jim's grade is " + $grades["Jim"]);

        echo("Student grade: " + $grades[$_POST["student"]]);
    ?>

    <!--Functions-->
    <?php
        function sayHi($name, $age) {
            echo("Hello $name, you are $age years old. <br>");
        }
        sayHi("Mike", 25);
    ?>

    <!--Return statements-->
    <?php
        function cube($num) {
            return pow($num, 3);
        }

        $cubedResult = cube(5);
        echo($cubedResult);
    ?>

    <!--If statements-->
    <?php
        $isMale = true;
        $isTall = false;
        if($isMale && $isTall) {
            echo("You are tall and a male.");
        }
        else if($isMale && !$isTall) {
            echo("You are a male, but not tall.");
        }
        else {
            echo("You are not tall or a male.");
        }


        function getMax($num1, $num2, $num3) {
            if($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            }
            else if($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            }
            return $num3;
        }
        echo("Maximum value is " + getMax(300, 500, 900));
    ?>


</body>
</html>