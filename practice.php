<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tut</title>
</head>
<body>

<!--Fetching User Input-->
<!--Form-->
<form action="practice.php" method="get">
    Name: <input type="text" name="name">
    <br><br>
    Age: <input type="number" name="age">
    <br><br>
    <input type="submit">
</form>
<br>
Your name is 
<?php
    echo $_GET["name"]
?>
<br>
Your age is <?php echo $_GET["age"] ?> 


</body>
</html>