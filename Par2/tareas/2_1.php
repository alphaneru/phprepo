<?php
function f($a) {
    return 4 * $a ** 3 + g(2 * $a, -3 * $a);
}

function g($b, $c) {
    return (7 * $b - 3) % ($c ** 2 + 1);
}

function h($x, $y, $z) {
    // tal vez ya no me gusta tanto no tener que especificar el tipo de dato
    return f((int) ($x / $y)) + 3 * g((int) ($z / $y), $x);
}

function funcionhorrible($x, $y, $z) {
    return h($x, $y, $z);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/problemas.css">
    <title>Practicando Funciones</title>
</head>

<body>
    <header class="header">
        <div class="inicio">
            <a href="../index.html"><img src="../img/holamundo.jpg"></a>
        </div>
        <div class="menu">
            <a href="2_1.php">Practicando Funciones</a>
        </div>
    </header>
    <h1>Practicando Funciones</h1>
    <div class="container">
        <div class="problema">
            <h2>Descripción</h2>
            <p>
                Dados tres números enteros <b>x</b>, <b>y</b>, <b>z</b>, calcula el valor de
                <b>h(x, y, z)</b> si las funciones <b>f</b>, <b>g</b> y <b>h</b> están
                definidas así:<br><br>
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mi>f</mi>
                    <mo stretchy="false">(</mo>
                    <mi>a</mi>
                    <mo stretchy="false">)</mo>
                    <mo>=</mo>
                    <mn>4</mn>
                    <msup>
                        <mi>a</mi>
                        <mn>3</mn>
                    </msup>
                    <mo>+</mo>
                    <mi>g</mi>
                    <mo stretchy="false">(</mo>
                    <mn>2</mn>
                    <mi>a</mi>
                    <mo>,</mo>
                    <mo>&#x2212;</mo>
                    <mn>3</mn>
                    <mi>a</mi>
                    <mo stretchy="false">)</mo>
                    <mo>,</mo>
                </math>
                <br>
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mi>g</mi>
                    <mo stretchy="false">(</mo>
                    <mi>b</mi>
                    <mo>,</mo>
                    <mi>c</mi>
                    <mo stretchy="false">)</mo>
                    <mo>=</mo>
                    <mo stretchy="false">(</mo>
                    <mn>7</mn>
                    <mi>b</mi>
                    <mo>&#x2212;</mo>
                    <mn>3</mn>
                    <mo stretchy="false">)</mo>
                    <mspace width="1em"></mspace>
                    <mi>mod</mi>
                    <mstyle scriptlevel="0">
                        <mspace width="thinmathspace"></mspace>
                    </mstyle>
                    <mstyle scriptlevel="0">
                        <mspace width="thinmathspace"></mspace>
                    </mstyle>
                    <mo stretchy="false">(</mo>
                    <msup>
                        <mi>c</mi>
                        <mn>2</mn>
                    </msup>
                    <mo>+</mo>
                    <mn>1</mn>
                    <mo stretchy="false">)</mo>
                    <mo>,</mo>
                </math>
                <br>
                <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                    <mi>h</mi>
                    <mo stretchy="false">(</mo>
                    <mi>x</mi>
                    <mo>,</mo>
                    <mi>y</mi>
                    <mo>,</mo>
                    <mi>z</mi>
                    <mo stretchy="false">)</mo>
                    <mo>=</mo>
                    <mi>f</mi>
                    <mrow data-mjx-texclass="INNER">
                        <mo data-mjx-texclass="OPEN">(</mo>
                        <mfrac>
                            <mi>x</mi>
                            <mi>y</mi>
                        </mfrac>
                        <mo data-mjx-texclass="CLOSE">)</mo>
                    </mrow>
                    <mo>+</mo>
                    <mn>3</mn>
                    <mstyle scriptlevel="0">
                        <mspace width="thickmathspace"></mspace>
                    </mstyle>
                    <mi>g</mi>
                    <mrow data-mjx-texclass="INNER">
                        <mo data-mjx-texclass="OPEN">(</mo>
                        <mfrac>
                            <mi>z</mi>
                            <mi>y</mi>
                        </mfrac>
                        <mo>,</mo>
                        <mi>x</mi>
                        <mo data-mjx-texclass="CLOSE">)</mo>
                    </mrow>
                    <mo>.</mo>
                </math>
                <br>
                Usa enteros para realizar los cálculos, y <b>mod</b> es la operación residuo
                de la división (también llamada módulo). Los resultados de las operaciones
                deben coincidir con aquellos del lenguaje C.
            </p>
        </div>
        <div class="formulario">
            <h2>Entrada</h2>
            <form action="2_1.php" method="post">
                <table>
                    <tr>
                        <td><input type="text" name="x" class="entrada"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="y" class="entrada"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="z" class="entrada"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Enviar" class="boton"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="salida">
        <h2>Salida</h2>
        <?php
        if ($_POST) {
            echo funcionhorrible($_POST['x'], $_POST['y'], $_POST['z']);
        } else {
            echo "No has enviado ningún dato";
        }
        ?>
    </div>
</body>

</html>