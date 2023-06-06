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
    
    
</body>
</html>