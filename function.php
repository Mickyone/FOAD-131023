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

$tableau = [
    [25, celsiusToFahrenheit(25)],
    [03, celsiusToFahrenheit(03)],
    [35, celsiusToFahrenheit(35)],
    [11, celsiusToFahrenheit(11)],
];

function celsiusToFahrenheit($celsius) {
    return round((9 / 5) * $celsius + 32);
}

$tableau = array_column($tableau, 1);

$tableauSTR = implode (', ', $tableau);