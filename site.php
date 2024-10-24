<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Tut</title>
    </head>

    <body>

        <?php
            //Intro
            echo "Hello World!!";
            echo "<h1>Ray's Site</h1>";
            echo "<hr>";
            echo "<p>This is my site</p>";

            //Variables
            $charName = "John";
            $charAge = 35;

            echo "There once was a man named $charName <br>";
            echo "He was $charAge years old <br>";
            echo "He really liked the name $charName <br>";
            echo "But didn't like being $charAge <br>";

            //Data Types
            //String
            echo "<br>";
            $phrase = "To be or not to be";
            $school = "Giraffe Academy";

            echo strtoupper($phrase);
            echo "<br>";
            echo strlen($phrase);
            echo "<br> <br>";
            echo $phrase[0];
            echo "<br>";
            echo $phrase[0] = "K";

            //Replace string
            echo "<br> <br>";

            echo str_replace("Giraffe", "Panda", $school);

            //substring
            echo "<br> <br>";
            echo substr($school, 8, 3);
            echo "<br br>";

            //Numbers
            //Int - whole no
            $age = 30;
            $num = 10;

            //Order of operations
            echo 4 + 5 * 10;
            echo "<br br>";
            echo (4 + 5) * 10;
            echo "<br> <br>";

            $num++;
            echo $num;
            echo "<br br>";
            $num += 25;
            echo $num;
            echo "<br br>";

            //absolute value
            echo abs(-100);
            echo "<br br>";
            echo "<br>";

            //num to the power of another no
            echo pow(2, 4);
            echo "<br br>";
            echo  "<br>";

            //sqrt function
            echo sqrt(144);
            echo "<br br>";
            echo "<br>";

            //finding max & min no
            echo max(2, 10);
            echo "<br br>";
            echo "<br>";

            echo min(2, 10);
            echo "<br br>";
            echo "<br>";

            //Rounding off a number
            echo round(3.7);
            echo "<br>";

            //Rounding up
            echo ceil(3.3);
            echo "<br>";

            //Rounding down
            echo floor(3.9);
            echo "<br br>";
            echo "<br>";
            
            //Float - decimal nos
            $gpa = 30.3;

            //Boolean - True or False value
            $isMale = true;

        ?>
    </body>

</html>