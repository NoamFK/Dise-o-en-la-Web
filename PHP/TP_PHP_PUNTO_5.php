<!DOCTYPE html>
<html>
<head>
    <title>Conversión de Binario</title>
</head>
<body>
    <form method="post">
        Ingrese un número binario: <input type="text" name="binary" required>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $binary = $_POST['binary'];
        
        if (preg_match('/^[01]+$/', $binary)) {
            $decimal = bindec($binary);
            $hexadecimal = dechex($decimal);
            
            echo "<h2>Conversión de binario:</h2>";
            echo "Decimal: " . $decimal . "<br>";
            echo "Hexadecimal: " . $hexadecimal . "<br>";
        } else {
            echo "Por favor, ingrese un número binario válido.";
        }
    }
    ?>
</body>
</html>