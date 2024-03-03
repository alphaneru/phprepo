<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estail.css">
    <title>Cálculos condicionales</title>
</head>
<body>
    <header>
        <h1><a href="index.php">Tarea 1.7</a></h1>
        <h2>Problemas con <span class="texto-bonito">entrada de datos (form)</span></h2>
    </header>
    <section>
        <div class="menu">
            <ul class="problemas">
                <li><a href="calculos.php">Cálculos Condicionales</a></li>
                <li><a href="formulota.php">Formulota</a></li>
                <li><a href="ladocorto.php">El lado más corto</a></li>
                <li><a href="escalera.php">Escalera de asteriscos</a></li>
            </ul>
        </div>
    </section>
    <section class="descripcion">
        <h3>Descripción</h3>
        <p>Diseñar un problema que pregunte los valores de las variables x, y, z y evalue la función f(x, y, z)</p>
        <p>
        <!-- ¿No podían hacer MathML más fácil de usar? (Ni siquiera está bien identado el código -->
        <math display="block" class="tml-display" style="display:block math;">
            <mrow>
            <mi>f</mi>
            <mo form="prefix" stretchy="false">(</mo>
            <mi>x</mi>
            <mo separator="true">,</mo>
            <mi>y</mi>
            <mo separator="true">,</mo>
            <mi>z</mi>
            <mo form="postfix" stretchy="false">)</mo>
            <mo>=</mo>
            <mstyle displaystyle="true" scriptlevel="0">
                <mfrac>
                <mrow>
                    <mstyle displaystyle="true" scriptlevel="0">
                    <mfrac>
                        <mrow>
                            <mi>x</mi>
                            <mo>+</mo>
                            <mi>y</mi>
                        </mrow>
                        <mrow>
                            <mn>2</mn>
                            <mi>x</mi>
                        </mrow>
                    </mfrac>
                    </mstyle>
                    <mo>+</mo>
                    <mstyle displaystyle="true" scriptlevel="0">
                        <mfrac>
                            <mrow>
                                <msup>
                                    <mi>x</mi>
                                    <mn>3</mn>
                                </msup>
                                <mo>+</mo>
                                <msup>
                                    <mi>y</mi>
                                    <mn>3</mn>
                                </msup>
                            </mrow>
                            <mrow>
                                <msup>
                                    <mi>x</mi>
                                    <mn>2</mn>
                                </msup>
                                <mo>+</mo>
                                <msup>
                                    <mi>y</mi>
                                    <mn>2</mn>
                                </msup>
                            </mrow>
                        </mfrac>
                    </mstyle>
                </mrow>
                <mrow>
                    <msup>
                        <mi>x</mi>
                        <mn>2</mn>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mi>y</mi>
                        <mn>2</mn>
                    </msup>
                    <mo>+</mo>
                    <msup>
                        <mi>z</mi>
                        <mn>2</mn>
                    </msup>
                </mrow>
                </mfrac>
            </mstyle>
            </mrow>
        </math>
        </p>
        <h3>Entrada</h3>
        <form action="formulota.php" method="post" class="entrada">
            <?php
                if ($_POST) {
                    echo "<input type=\"text\" name=\"jaj\" placeholder=\"{$_POST['jaj']}\">";
                } else {
                    echo "<input type=\"text\" name=\"jaj\" placeholder=\"x y z\">";
                }
            ?>
        </form>
        <h3>Salida</h3>
        <?php
            if ($_POST) {
                formula();
            }
        ?>
    </section>
</body>
</html>

<?php
    function formula() {
        $letras = explode(" ", $_POST['jaj']);
        $x = $letras[0];
        $y = $letras[1];
        $z = $letras[2];

        $frac1 = ($x + $y) / (2 * $x);
        $frac2 = (pow($x, 3) + pow($y, 3)) / (pow($x, 2) + pow($y, 2));
        $frac3 = ($frac1 + $frac2) / (pow($x, 2) + pow($y, 2) + pow($z, 2));

        echo "<p>Resultado: " . round($frac3, 6) . "</p>";
    }
?>