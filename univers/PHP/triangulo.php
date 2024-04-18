<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área de Triángulo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #resultado {
            font-weight: bold;
        }

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
</head>
<body>
    <h1>Calculadora de Área de Triángulo</h1>
    <label for="base">Base (cm):</label>
    <input type="number" id="base"><br>
    <label for="altura">Altura (cm):</label>
    <input type="number" id="altura"><br>
    <button onclick="calcularArea()">Calcular Área</button><br>
    <p id="resultado"></p>
    <a href="PERIODO1.html"> <button>Regresar</button></a>

    <script>
        function calcularArea() {
            var base = parseFloat(document.getElementById("base").value);
            var altura = parseFloat(document.getElementById("altura").value);
            
            if (!isNaN(base) && !isNaN(altura) && base > 0 && altura > 0) {
                var area = (base * altura) / 2;
                document.getElementById("resultado").textContent = "El área del triángulo es: " + area.toFixed(2) + " cm²";
            } else {
                document.getElementById("resultado").textContent = "Por favor, introduce valores válidos para la base y la altura.";
            }
        }
    </script>
</body>
</html>
