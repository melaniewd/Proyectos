<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Ingrese los números</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="cantidad">Cantidad de números:</label>
    <input type="number" id="cantidad" name="cantidad" min="1" required><br><br>
    
    <label for="numeros">Ingrese los números separados por comas:</label><br>
    <textarea id="numeros" name="numeros" rows="4" cols="50" required></textarea><br><br>
    
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST["cantidad"];
    $cadena_numeros = $_POST["numeros"];
    $arreglo_numeros = explode(",", $cadena_numeros);
    echo "El arreglo ingresado es: [", implode(", ", $arreglo_numeros), "]";
}

?>

</body>
</html>
