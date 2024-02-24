<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Practicando con formulas</title>
</head>
<body>
    <div class="rectangulo"></div>
    <h2>12618. Practicando con formulas</h2>
    <h3>Descripción</h3>
    Dado un valor real <i>a</i>, quieres resolver una serie de ecuaciones hasta obtener el valor de <i>z</i>.<br>
    <br><i>x = 3a + 15</i><br>
    <i>y = (x + 3) / (x + 1)</i><br>
    <i>Z = (5x + 7y) / (axy)</i>
    <h3>Entrada</h3>
    Un real <i>a</i>. Puedes suponer que <i>1 <= a <= 100.</i>
    <h3>Salida</h3>
    Un real que sea el valor de <i>z</i> impreso con tres puntos decimales.
    <h3>Ejemplo</h3>
    <table class="womp" border="1" cellspacing="3" cellpadding="3">
        <tr>
            <th>Entrada</th>
            <th>Salida</th>
        </tr>
        <tr>
            <td>33.562</td>
            <td>
                <?php
                    $a = 33.562;
                    $x = 3 * $a + 15;
                    $y = ($x + 3) / ($x + 1);
                    $z = ((5 * $x) + (7 * $y)) / ($a * $x * $y);

                    echo round($z, 3);
                ?>
            </td>
        </tr>
        <tr>
            <td>72.569</td>
            <td>
                <?php
                    $a = 72.569;
                    $x = 3 * $a + 15;
                    $y = ($x + 3) / ($x + 1);
                    $z = ((5 * $x) + (7 * $y)) / ($a * $x * $y);

                    echo round($z, 3);
                ?>
            </td>
        </tr>
        <tr>
            <td>64.835</td>
            <td>
                <?php
                    $a = 64.835;
                    $x = 3 * $a + 15;
                    $y = ($x + 3) / ($x + 1);
                    $z = ((5 * $x) + (7 * $y)) / ($a * $x * $y);

                    echo round($z, 3);
                ?>
            </td>
        </tr>
    </table>
</body>
</html>