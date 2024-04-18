<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par o Impar</title>
</head>
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
</style>
<body>
    <h1>Determinar si un número es Par</h1>
    <p>El número 6 es:</p>
    <p id="resultado"></p>
    <a href="PERIODO1.html"> <button>Regresar</button></a>
    <script>
        var numero = 6;
        var resultado = document.getElementById("resultado");

        if (numero % 2 == 0) {
            resultado.textContent = "par.";
        } else {
            resultado.textContent = "impar.";
        }
    </script>
</body>
</html>


