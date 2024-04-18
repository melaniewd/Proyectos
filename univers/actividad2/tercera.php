<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios</title>
</head>

<body>

    <h2>Números Aleatorios</h2>

    <?php

    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }

    $numeros_pares = [];
    $numeros_impares = [];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $numeros_pares[] = $numero;
        } else {
            $numeros_impares[] = $numero;
        }
    }

    echo "<p>Números pares: " . implode(", ", $numeros_pares) . "</p>\n";
    echo "<p>Números impares: " . implode(", ", $numeros_impares) . "</p>\n";

    ?>

</body>

</html>
