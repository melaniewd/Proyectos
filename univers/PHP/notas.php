<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="assets/images/ballena.png" type="image/x-icon">
    <title>MELANIE DRADA OSORIO</title>
</head>
<body>
    <h2>Registro de Notas Escolares</h2>
    <?php

    $notas = array(
        "Matemáticas" => array("JOSE" => 85, "MATIUS" => 92, "MAR" => 78),
        "Ciencias" => array("JOSE" => 88, "MATIUS" => 90, "MAR" => 85),
        "Literatura" => array("JOSE" => 80, "MATIUS" => 87, "MAR" => 82)
    );

    function mostrarNotas($notas)
    {
        foreach ($notas as $asignatura => $estudiantes) {
            echo "<h3>$asignatura:</h3>";
            foreach ($estudiantes as $estudiante => $nota) {
                echo "<p>$estudiante: $nota</p>";
            }
        }
    }
    mostrarNotas($notas);
    ?>
</body>
</html>