<?php


$json = file_get_contents('https://dummyjson.com/user');
$data = json_decode($json, true);
dbug ($data);

foreach ($data as $user) {
    echo '<img src="' . $user['image'] . '" alt="Image de ' . $user['name'] . '">';

    echo '<h4>Prénom : ' . $user['firstname'] . '</h4>';

    echo '<p>Nom : ' . $user['lastname'] . '</p>';

    echo '<p>Email : ' . $user['email'] . '</p>';
}

?>