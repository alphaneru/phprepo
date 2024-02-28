<?php
    function sol ($n) {
        $arr1 = array();
        $arr2 = array();
        $arrres = array();

        for ($i = 0; $i < $n; $i++) {
            array_push($arr1, rand(1, 1000));
            array_push($arr2, rand(1, 1000));
            array_push($arrres, $arr1[$i] + $arr2[$i]);
        }

        echo "<i>Valor de n: " . $n . "</i><br>";
        echo "<tr>";
        echo "<td>Arreglo 1</td>";
        echo "<td>Arreglo 2</td>";
        echo "<td>Suma</td>";
        echo "</tr>";

        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            echo "<td>" . $arr1[$i] . "</td>" . "<td>" . $arr2[$i] . "</td>" . "<td>" . $arrres[$i] . "</td>";
            echo "</tr>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumando dos conjuntos</title>
    <link rel="stylesheet" href="sampletext.css">
</head>
<body>
    <div class="rectangulo"></div>
    <h2>Sumando dos conjuntos</h2>
    <h3>Descripción</h3>
    <p>
        Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea N=4:<br>
        2 3 4 5<br>
        6 7 1 3<br>
        <br>
        El resultado de sumarlos es:<br>
        8 10 5 8
    </p>
    <h3>Caso de prueba</h3>
    <table class="womp" border="1" cellspacing="3" cellpadding="3">
        <?php
            $random = rand(1, 100);
            sol($random);
        ?>
    </table>
</body>
</html>