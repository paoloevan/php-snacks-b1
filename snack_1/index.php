<?php
## Snack 1 Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60 

$matches = [
    $match_1 => ['roma', 'firenze', '88', '66'],
    $match_2 => ['roma', 'bologna', '44', '33'],
    $match_3 => ['roma', 'torino', '11', '99'],
    $match_4 => ['roma', 'parma', '22', '90']

]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?php
        foreach ($matches as $key => $match) {
            foreach ($match as $element) {
                echo $element;
            }
        }
        ?></h3>
</body>

</html>