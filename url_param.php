<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Params</title>
</head>
<body>
    <form action="url_param.php" method="post">
        Name: <input type="text" name="name">
        <br> <br>
        Age: <input type="number" name="age">
        <br> <br>
        Password: <input type="text" name="password">
        <input type="submit">
    </form>
    <br><br>

    <?php
    echo $_POST["name"];
    echo "<br> <br>";
    echo $_POST["age"];
    ?>
</body>
</html>