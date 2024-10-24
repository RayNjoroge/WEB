<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
    
    <?php
    //Array - a structure that can store more than element
    $friends = array("Kevin", "Karen", "Oscar", "Jim");

    //modifying elements
    $friends[1] = "Dwight";

    //Adding an element
    $friends[4] = "Angela";

    echo $friends[4];

    echo "<br> <br>";

    //counting elements
    echo count($friends);
    ?>
</body>
</html>