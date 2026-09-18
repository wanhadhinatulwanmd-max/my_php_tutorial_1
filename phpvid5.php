<?php

$stringOne = "my email is";
$stringTwo = "n0t1mp0rt9nt.co.my";

//echo $stringOne.$stringTwo; //join strings together

$name = "Doom";

//echo 'Hey my name is'.$name;

//echo "Hey my name is $name"; // "" diferentiate text and variable in single quote.

//echo "The night is \"desirable\""; // '\\' prevent the quotes from escaping. keep the intended quotes in the text.
//echo 'The night is"desirable"'; // same use, simpler way.

//echo $name[3]; //find single value, start counting from 0,1,2.

//echo strlen($name); //find string lenght.
//echo strtoupper($name); // uppercase.
//echo strtolower($name); //lowercase.
echo str_replace('m','d', $name); //replace certain value.

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP TUTO 3</title>
    </head>
    <body>

    <h1>STRINGS</h1>

    
    </body>
</html>
