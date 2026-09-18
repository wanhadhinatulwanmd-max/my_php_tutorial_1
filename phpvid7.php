<?php

//index arrays

$peopleOne = ['doom','night','moon'];
//echo $peopleOne[1]; // pick value from array.

$peopleTwo = array('last','breath','live');
//echo $peopleTwo[2]; //same use , diferent array form.

$ages = [20, 100, 153, 1020];
//print_r ($ages); // pick numbers value from array.

$ages[0] = 22;
//print_r($ages); //overwrite values.

$ages[] = 1889;
//print_r($ages); // add values inside arrays.

array_push($ages, 88);
//print_r($ages); // same use , different array form.


//echo count($ages); // count arrays value.


$peopleThree = array_merge($peopleOne, $peopleTwo);
//print_r($peopleThree); // merge two arrays.


//associates arrays (key & value)

$nightOne = ['doom'=>'moon', 'last'=>'live', 'final'=>'step'];
//echo $nightOne['last']; // call value using key.
//print_r($nightOne); // print all keys with values.


$nightTwo = array('potrait'=> 'art','only'=> 'color');
//print_r($nightTwo); // another way to create array.

//$nightTwo['star'] = 'shine'; // add key n value inside array.
//$nightTwo['only'] = 'shine'; // overwrite key's value
//print_r($nightTwo);


//echo count($nightOne); // count arrays , ''=>'' is one value


$nightThree = array_merge($nightOne, $nightTwo);
print_r($nightThree);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP TUTO 5</title>
    </head>
    <body>

    <h1>ARRAYS</h1>

    
    </body>
</html>