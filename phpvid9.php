<?php

//loops

$nights = ['doom', 'red', 'moon'];

//for($i=0 ; $i <count($nights); $i++){
   //echo $nights[$i] . '<br />';
//} //call arrays while split the values into diferent line.

//foreach($nights as $night){
    //echo $night . '<br />';
//} // same result

$products = [
    ['name'=>'star plush', 'price'=>88],
    ['name'=>'piano mini', 'price'=>69],
    ['name'=>'toy sword', 'price'=>21],
    ['name'=>'hero cape', 'price'=>15],
    ['name'=>'stuff animal', 'price'=>18],
    ['name'=>'aqua pazza', 'price'=>23],
];

//foreach($products as $product){
    //echo $product['name'] . ' - ' . $product['price'];
    //echo '<br />';
//}

$i = 0;

while($i < count($products)){
    echo $products[$i]['name'];
    echo '<bt />';
    $i++;

}




?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP TUTO 7</title>
    </head>
    <body>

    <h1>LOOPS</h1>

    <h2>Products</h2>
    <ul>
        <?php foreach($products as $product){ ?>
            <h3><?php echo $product['name']; ?></h3>
            <p>£ <?php echo $product['price']; ?></p>
            
        <?php } ?>
    </ul>

    
    </body>
</html>