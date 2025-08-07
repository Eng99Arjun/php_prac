<!-- Write a script to use integer casting to round down a float. Do the
following:
a. Create a $scoreFloat variable containing 55.9.
b. Create a second variable, $scoreInt, containing the value of
$scoreFloat cast into an integer.
c. Print out the type of $scoreFloat, then its value, then a newline
character.
d. Print out the type of $scoreInt, then its value, then a newline
character.
Your program output should look as follows:
double scoreFloat = 55.9
integer scoreInt = 55 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 2 Exercise 1</title>
</head>
<body>
    <?php
        $scoreFloat = 55.9;
        $scoreInt = (int) $scoreFloat;
        echo(gettype($scoreFloat)." scoreFloat = ".$scoreFloat. "<br>");
        echo(gettype($scoreInt)." scoreInt = ".$scoreInt. "<br>");
    ?>
</body>
</html>