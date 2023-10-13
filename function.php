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


$jsonPerson1 = [
        'nom' => 'Jimenez',
        'prenom' => 'Raymond',
    ];
$jsonAmi1 = [
        'nom' => 'Grant',
        'prenom' => 'Robert',
        'yeux' => 'blue',
    ];
$jsonAmi2 = [
        'nom' => 'Shaffer',
        'prenom' => 'Ball',
        'yeux' => 'vert',
    ];

dd($jsonPerson1);
dd($jsonAmi);

$jsonPerson1 = json_encode($person1);
$jsonAmi2 = json_encode($jsonAmi2);



$urlApi = "https://ximg.es/64x64/000/fff";

?>

<figure>
    <img src="<? //=$jsonPersonArrayPhp['image'] 
                ?>">
        <figcaption>
            <ul>
                <li><? "L'amie de" . =$jsonPerson1['prenom'] . " est " . 
                    ?> <? //=$jsonPersonArrayPhp['nom'] 
                                                            ?></li>
                <li><? //=$jsonPersonArrayPhp['email'] 
                    ?></li>
            </ul>
        </figcaption>
    </img>
</figure>

<?php



?>