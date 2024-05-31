<!DOCTYPE html>
<html>
<head>
    <title>Convertir Cifra a Letras</title>
</head>
<body>
    <form method="post">
        Ingrese una cifra: <input type="text" name="number" required>
        <input type="submit" value="Convertir">
    </form>

    <?php
    function convertirCifraALetras($numero) {
        $unidad = [
            "", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve"
        ];

        $decena = [
            "", "diez", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa"
        ];

        $decenaEspecial = [
            "once", "doce", "trece", "catorce", "quince", "dieciséis", "diecisiete", "dieciocho", "diecinueve"
        ];

        $centena = [
            "", "cien", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos", "novecientos"
        ];

        if ($numero == 0) {
            return "cero";
        }

        $resultado = "";

        // Manejar números mayores de 100
        if ($numero >= 100) {
            $c = floor($numero / 100);
            $resultado .= $centena[$c];
            $numero = $numero % 100;

            if ($numero > 0) {
                $resultado .= " ";
            }
        }

        // Manejar números entre 11 y 19
        if ($numero >= 11 && $numero <= 19) {
            $resultado .= $decenaEspecial[$numero - 11];
        } else {
            // Manejar decenas
            if ($numero >= 10) {
                $d = floor($numero / 10);
                $resultado .= $decena[$d];
                $numero = $numero % 10;

                if ($numero > 0) {
                    $resultado .= " y ";
                }
            }

            // Manejar unidades
            if ($numero > 0) {
                $resultado .= $unidad[$numero];
            }
        }

        return $resultado;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['number']);

        if (is_numeric($numero)) {
            $resultado = convertirCifraALetras($numero);
            echo "<h2>El número en letras es: $resultado</h2>";
        } else {
            echo "Por favor, ingrese un número válido.";
        }
    }
    ?>
</body>
</html>