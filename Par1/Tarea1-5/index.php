<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a = array();
    $n = rand(1, 1000);

    for ($i = 0; $i < $n; $i++) {
        array_push($a, rand(0, 10));
    }

    $suma = array_sum($a);

    $prom = round($suma / $n, 2);

    $cont = 0;
    $apr = 0;
    $rep = 0;

    for ($i = 0; $i < $n; $i++) {
        if ($a[$i] >= $prom) {
            $cont++;
        }

        if ($a[$i] >= 6.0) {
            $apr++;
        } else {
            $rep++;
        }
    }
    
    $apr_p = $apr / $n * 100;
    $rep_p = $rep / $n * 100;
    $suma = 0;
    for ($i = 0; $i < $n; $i++) {
        $suma += abs(($a[$i] - $prom) * ($a[$i] - $prom));
    }

    $desv = sqrt($suma / $n);

    echo "Promedio: {$prom}<br>";
    echo "Calificaciones mayores al promedio: {$cont}<br>";
    echo "Alumnos aprobados: {$apr} o {$apr_p}%<br>";
    echo "Alumnos reprobados: {$rep} o {$rep_p}%<br>";
    echo "Desviacion estándar: {$desv}<br>";
    echo "Números:<br>";
    echo "<table border=\"1\">";
    for ($i = 0; $i < $n - 1; $i+=0) {
        echo "<tr>";
        for ($j = 0; $j < 30; $j++) {
            if ($i > $n - 1) {
                break;
            } else {
                echo "<td>{$a[$i]}</td>";
                $i++;
            }
        }
        echo "</tr>";
    }
    echo "</table>";

?>
</body>
</html>