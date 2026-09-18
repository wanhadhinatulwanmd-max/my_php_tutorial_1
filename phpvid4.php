<?php

//constant , not allowed to overwrite.
define('NAME', 'Ijlal');

//$name  = "Ijlal"; //put value for variable
$age = 20;

//$name = 'Wan'; //overwrite value

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP TUTO 2</title>
    </head>
    <body>

    <h1>User Profile Page</h1>

    <div><?php echo NAME; ?></div>
    <div><?php echo $age; ?></div>

    </body>
</html>
