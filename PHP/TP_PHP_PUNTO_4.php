<!DOCTYPE html>
<html>
<head>
    <title>Descomposición de un número</title>
</head>
<body>
    <form method="post">
        Ingrese un número: <input type="text" name="number" required>
        <input type="submit" value="Descomponer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];
        
        if (is_numeric($number)) {
            $number = strrev((string)$number);
            $length = strlen($number);
            $units = ["unidad", "decena", "centena", "unidad de mil", "decena de mil", "centena de mil"];
            
            echo "<h2>Descomposición del número:</h2>";
            for ($i = 0; $i < $length; $i++) {
                echo $units[$i] . ": " . $number[$i] . "<br>";
            }
        } else {
            echo "Por favor, ingrese un número válido.";
        }
    }
    ?>
</body>
</html>