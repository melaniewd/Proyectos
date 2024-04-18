<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par o Impar</title>
    <script>
        function determinarParImpar() {
            var numero = parseInt(document.getElementById("numero").value);
            var resultado = document.getElementById("resultado");

            if (numero % 2 == 0) {
                resultado.textContent = "El número " + numero + " es par.";
            } else {
                resultado.textContent = "El número " + numero + " es impar.";
            }
        }
    </script>
</head>
<body>
    <h1>Determinar si un número es Par o Impar</h1>
    <label for="numero">Ingrese un número:</label>
    <input type="number" id="numero">
    <button onclick="determinarParImpar()">Determinar</button>
    <p id="resultado"></p>
</body>
</html>
