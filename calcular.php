<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Básicas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .container {
            display: inline-block;
            text-align: left;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label, input, button {
            display: block;
            margin: 5px 0;
        }
        button {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1> Manrique Emmmanuel Sanchez Lara </h1>
    <h2>9-A</h2>
    <h2>Operaciones Básicas</h2>
    <div class="container">
        <form method="POST">
            <div class="input-group">
                <label for="valor1">Valor 1:</label>
                <input type="number" id="valor1" name="valor1" required>
            </div>
            <div class="input-group">
                <label for="valor2">Valor 2:</label>
                <input type="number" id="valor2" name="valor2" required>
            </div>
            <div class="input-group">
                <button type="submit" name="operacion" value="sumar">Suma</button>
                <button type="submit" name="operacion" value="restar">Resta</button>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            $operacion = $_POST["operacion"];
            $resultado = "";
            if (is_numeric($valor1) && is_numeric($valor2)) {
                switch ($operacion) {
                    case "sumar":
                        $resultado = $valor1 + $valor2;
                        break;
                    case "restar":
                        $resultado = $valor1 - $valor2;
                        break;
                }
            }    
        ?>
    </div>
</body>
</html>
