<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <title>Suma de 2 números en PHP</title>
    <style> 
   button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4c82af;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #344c9b;
    }

    input {
        padding: 10px 20px;
      font-size: 16px;
      background-color: #4c82af;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;  
    }


</style>

</head>
<body>
    <h2>Suma de 2 números en PHP</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td><input type="text" name="numero1"></td>
            </tr>
            <tr>
                <td><input type="text" name="numero2"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sumar"></td>
                <a href="PERIODO1.html"> <button>Regresar</button></a>
            </tr>
        </table>
    </form>
    <center>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['numero1']) && isset($_POST['numero2'])){
                $num1 = $_POST['numero1'];
                $num2 = $_POST['numero2'];
                // Convertimos los valores a números
                $num1 = floatval($num1);
                $num2 = floatval($num2);
                // Verificamos si los valores son números válidos
                if(is_numeric($num1) && is_numeric($num2)){
                    $suma = $num1 + $num2;
                    echo "La suma de: " . $num1 . " y " . $num2 . " es: " . $suma;
                } else {
                    echo "Por favor, ingrese números válidos.";
                }
            }
        }
        ?>
    </center>
    <img src="" alt="Descripción de la imagen">
</body>
</html>



