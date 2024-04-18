<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="assets/images/ballena.png" type="image/x-icon">
<head>
    <title>MELANIE DRADA OSORIO</title>
</head>

<body>
    <h2>TAREAS</h2>
    <?php
    $tareas = array("Hacer el ejercicio de matematicas", "Organizar el armario", "Traducir un texto de ingles", "Tomar 7 vasos de agua", "Terminar el trabajo de artes");

    function mostrarTareas($tareas)
    {
        foreach ($tareas as $key => $tarea) {
            echo "<p>" . ($key + 1) . ". $tarea</p>";
        }

    }
   

    mostrarTareas($tareas);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tarea_completada'])) {

        $tareaCompletada = $_POST['tarea_completada'];
        if (isset($tareas[$tareaCompletada])) {

            unset($tareas[$tareaCompletada]);
            echo "<h3>Lista de Tareas Actualizada:</h3>";
            mostrarTareas($tareas);
        }
    }
    ?>
    <hr>
    <h3>Tarea Completada</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="tarea_completada">Coloque el numero de tareas realizadas:</label><br>
        <input type="number" id="tarea_completada" name="tarea_completada" min="1" max="<?php echo count($tareas); ?>"
            required><br><br>

        <input type="submit" value="Marcar como Completada">
    </form>
</body>

</html>