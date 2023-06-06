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

    
</body>
</html>