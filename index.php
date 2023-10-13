
<?php

require './function.php';

// TABLEAU:
$tab1 = []; // Initialize the $tab1 variable to an empty array.

dbug($tab1); // This will no longer cause an error.

$tab1 = [27,15,34,379,248,5643,81,211,999,142,300,572];

dbug($tab1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <figcaption>
        <ul>
            <li><?php echo($tableauSTR) ?></li>
        </ul>
    </figcaption>
</body>
</html>