<?php
//## Snack 2 Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
//che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
//Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
if (strlen($_GET['name']) > 3 && str_contains($_GET['mail'], '.', '@' && is_numeric($_GET['age']))) {
    $result = 'Accesso riuscito';
} else {
    $result = 'Accesso negato';
}
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

    <form action='index.php' method='GET'>
        <label for="name">Inserire nome</label>
        <input type="text" name='name' id='name'>
        <label for="mail">Inserire email</label>
        <input type="text" name='mail' id='mail'>
        <label for="age">Inserire età</label>
        <input type="number" name='age' id='age'>
        <button type="submit">Invia</button>
        <h1>
            <?php
            if (strlen($_GET['name']) > 3 && str_contains($_GET['mail'], '.', '@' && is_numeric($_GET['age']))) {
                $result = 'Accesso riuscito';
            } else {
                $result = 'Accesso negato';
            }
            echo $result;
            ?>
        </h1>
    </form>



</body>

</html>