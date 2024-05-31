<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablas Multiplicar</title>
    <style>
        
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>TABLA DE MULTIPLICAR</h1>
    <form action="" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" max="9" min="0" required>
        <input type="submit" value="Mostrar Tabla">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = $_POST["numero"];
        echo "<h2>Tabla de multiplicar del $numero:</h2>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>