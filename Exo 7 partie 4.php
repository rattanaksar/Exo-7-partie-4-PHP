<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7 : Les boucles</title>
</head>
<body>
    <h1>Exo 7 : Les boucles</h1>
    <p>
    En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
    <p>
        <?php
        for($i=1; $i <= 100; $i += 15) {
            echo 'on tient le bout !'."<br>";
        }
        ?>
    </p>
</body>
</html>