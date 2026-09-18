<?php


//multi-dimensional arrays

//$blogs = [
    //['doom place', 'doom', 'moon', 1889],
    //['doom time pending', 'night','moon',25],
    //['star shine', 'sky','moon',88],
//];

//print_r($blogs);  //print all arrays.
//print_r($blogs[1]);  //call specific array.
//print_r($blogs[1][3]);  //call specific value.

$blogs = [
    ['title'=>'doom place', 'author'=>'doom', 'inspo'=>'moon', 'counts'=>1889],
    ['title'=>'doom time pending', 'author'=>'night','inspo'=>'moon','counts'=>25],
    ['title'=>'star shine', 'author'=>'sky','inspo'=>'moon','counts'=>88],
];

//echo $blogs[2]['author']; // call specific value using key.
//echo count($blogs);

$blogs[] = ['title'=> 'red moon','author'=> 'trail', 'content'=>'journal', 'counts'=> 6669];

//print_r($blogs);
$popped = array_pop($blogs);
print_r($popped);


?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP TUTO 6</title>
    </head>
    <body>

    <h1>MULTI-DIMENSIONAL ARRAYS</h1>

    
    </body>
</html>