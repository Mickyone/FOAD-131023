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

// Créer un tableau avec les nombres fournis
$numbers = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];

$pair_numbers = [];
$impair_numbers = [];

foreach ($numbers as $number) {
  // Vérifier si le nombre est pair
  if ($number % 2 == 0) {
    // Le nombre est pair
    $pair_numbers[] = $number;
  }
//   return $pair_numbers
};

$impair_numbers = [];
foreach ($numbers as $number) {
  // Vérifier si le nombre est pair
  if ($number % 2 == 1) {
    // Le nombre est pair
    $impair_numbers[] = $number;
    // return $impair_numbers
  }
}
dbug($pair_numbers);
dbug($impair_numbers);

$STR_pair_numbers = implode(', ', $pair_numbers);
$STR_impair_numbers = implode(', ', $impair_numbers);