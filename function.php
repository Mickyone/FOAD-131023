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


$people = [
    $person,
    [
        'nom' => 'laster Delaney',
        'age' => 32,
        'yeux' => 'bleu',
        'email' => 'delaneylester@zanymax.com',
        'fruit' => 'fraise',
    ],
    [
        'nom' => 'ball haffer',
        'age' => 20,
        'yeux' => 'blue',
        'email' => 'ballshaffer@zensure.com',
        'fruit' => 'apple',
    ],
    [
        'nom' => 'Raymond Jimenez',
        'age' => 21,
        'yeux' => 'green',
        'email' => 'raymondjimenez@tingles.com',
        'fruit' => 'fraise',
    ],
    [
        'nom' => 'Skinner West',
        'age' => 27,
        'yeux' => 'brown',
        'email' => 'skinnerwest@isologica.com',
        'fruit' => 'fraise',
    ],
    [
        'nom' => 'Cabera jackson',
        'age' => 27,
        'yeux' => 'brown',
        'email' => 'scabrerajackson@fibrebox.com',
        'fruit' => 'apple',
    ],
];

dbug($people);
// unset($people);

// $jsonPeopleArrayPhp = json_decode($jsonPerson,true);

$urlApi = "https://ximg.es/64x64/000/fff";

?>

<figure>
    <img src="<? =$urlApi['image'] ?>">
                <figcaption>
                    <ul>
                        <li><? =$Person[0][1] ?></li>
                        <li><? = ?></li>
                    </ul>
                </figcaption>
            </img>
        </figure>

<?php



?>