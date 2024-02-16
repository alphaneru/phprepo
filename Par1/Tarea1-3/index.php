<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="oup.css">
    <title>Colegiatura</title>
</head>
<body>
    <div class="rectangulo"></div>
    <h2>Colegiatura</h2>
    <h3>Descripción</h3>
    <p>La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca, pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este:</p>
    <i>Plan de pagos:</i>
    <ul>
        <li>La colegiatura de los alumnos se determina según el número de materias que cursan. El costo de cada una de las materias es de $1600</li>
        <li>Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente: si el promedio obtenido por un alumno en el último periodo es mayor o igual a 9, se le hará un descuento del 30% sobre la colegiatura y no se le cobrará IVA; si el promedio obtenido es menor que 9 deberá pagar la colegiatura completa, más el IVA del 16%</li>
    </ul>
    <h3>Entrada</h3>
    <p>El número de materias <i>A</i> que Esteban va a cursar. Y un número con decimales <i>B</i> que es el promedio de Esteban.</p>
    <h3>Salida</h3>
    <p>Un número entero <i>C</i> con el precio a pagar. Debe de ir con un $</p>
    <h3>Casos de prueba</h3>
    <table class="womp" border="1" cellspacing="3" cellpadding="3">
        <tr>
            <th>Caso de prueba</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>5<br>9.6</td>
            <td>
                <?php
                    $a = 5;
                    $b = 9.6;
                    $colegiatura = null;

                    if ($b >= 9.0) {
                        $colegiatura = 1600 - (1600 * 0.3);
                    } else {
                        $colegiatura = 1600 + (1600 * 0.16);
                    }
                    
                    $total = $colegiatura * $a;
                    echo "\${$total}";
                ?>
            </td>
        </tr>
        <tr>
            <td>8<br>7.8</td>
            <td>
            <?php
                    $a = 8;
                    $b = 7.8;
                    $colegiatura = null;

                    if ($b >= 9.0) {
                        $colegiatura = 1600 - (1600 * 0.3);
                    } else {
                        $colegiatura = 1600 + (1600 * 0.16);
                    }
                    
                    $total = $colegiatura * $a;
                    echo "\${$total}";
                ?>
            </td>
        </tr>
        <tr>
            <td>2<br>8</td>
            <td>
            <?php
                    $a = 2;
                    $b = 8.0;
                    $colegiatura = null;

                    if ($b >= 9.0) {
                        $colegiatura = 1600 - (1600 * 0.3);
                    } else {
                        $colegiatura = 1600 + (1600 * 0.16);
                    }
                    
                    $total = $colegiatura * $a;
                    echo "\${$total}";
                ?>
            </td>
        </tr>
    </table>
</body>
</html>