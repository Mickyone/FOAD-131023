<?php 

function dbug($value){
    echo '<pre style="background-color:brown;color:yellow;overflow:auto;padding:10px">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

function dd($value){
    dbug($value);
    die('Script php arrêté !!!');
}

$colors = ['red', 'green', 'blue', 'cyan', 'magenta', 'yellow', 'black'];


foreach($colors as $color){
    echo ucwords($color) . '<br>';
}


?>