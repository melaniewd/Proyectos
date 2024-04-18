<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #resultado-img {
            max-width: 100%;
            display: block;
            margin-top: 20px;
        }

        input{
            padding: 10px 20px;
      font-size: 16px;
      background-color: #4c82af;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;  
        }

        button onclick{
            background-color: #344c9b;

        }
    </style>
</head>
<body>
    <h1>Calculadora de Índice de Masa Corporal (IMC)</h1>
    <label for="peso">Peso (kg):</label>
    <input type="number" id="peso" min="0">
    <br>
    <label for="altura">Altura (m):</label>
    <input type="number" id="altura" min="0">
    <br>
    <button onclick="calcularIMC()">Calcular IMC</button>
    <p>Su IMC es: <span id="resultado"></span></p>
    <img id="resultado-img" src="" alt="Resultado IMC">
    
    <script>
        function calcularIMC() {
            var peso = parseFloat(document.getElementById("peso").value);
            var altura = parseFloat(document.getElementById("altura").value);
            var resultado = document.getElementById("resultado");
            var resultadoImg = document.getElementById("resultado-img");

            if (peso > 0 && altura > 0) {
                var imc = peso / (altura * altura);
                resultado.textContent = imc.toFixed(2);

                if (imc < 18.5) {
                    resultadoImg.src = "bajo_peso.png";
                } else if (imc >= 18.5 && imc < 25) {
                    resultadoImg.src = "normal.png";
                } else if (imc >= 25 && imc < 30) {
                    resultadoImg.src = "sobrepeso.png";
                } else {
                    resultadoImg.src = "obeso.png";
                }
            } else {
                resultado.textContent = "Por favor, ingrese un peso y altura válidos.";
                resultadoImg.src = "";
            }
        }
    </script>
</body>
</html>

             