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

$json = file_get_contents('https://dummyjson.com/user');
    
$data = json_decode($json, true);

// dd($data);

$image = [];

foreach ($data as $user) {
    echo '<img src="' . $user['image'] . '">';
    echo '<h4>Prénom : ' . $user['firstname'] . '</h4>';
    echo '<p>Nom : ' . $user['lastname'] . '</p>';
    echo '<p>Email : ' . $user['email'] . '</p>';
}
    
?>