<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números Primos</title>
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
    <h1>Tabla de Números Primos</h1>
    <form action="" method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Mostrar Números Primos">
    </form>

    <?php
    function esPrimo($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $primos = [];
        $contador = 0;
        $num = $numero + 1;

        while (count($primos) < 16) {
            if (esPrimo($num)) {
                $primos[] = $num;
            }
            $num++;
        }

        echo "<h2>Los 16 siguientes números primos a partir de $numero:</h2>";
        echo "<table>";
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 4; $j++) {
                echo "<td>" . $primos[$contador] . "</td>";
                $contador++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>

