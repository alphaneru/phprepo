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
        <h2>Cálculos condicionales</h2>
        <h3>Descripción</h3>
        <p>
            Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones 
            se deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un 
            número inicial <b>N</b>, realizar las siguientes operaciones en el orden indicado y con aritmética entera:
        </p>
        <ol>
            <li>Si el valor actual de <b>N</b> es par, divídelo entre 2. En caso contrario, súmale 1.</li>
            <li>Si el valor actual de <b>N</b>  tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.</li>
            <li>Si el valor actual de <b>N</b>  es un múltiplo de tres, réstale uno.</li>
        </ol>
        <p>Escribe un programa que te ayude a calcular el valor final de <b>N</b> y el número de veces que fue modificado.</p>
        <h3>Entrada</h3>
        <form action="calculos.php" method="post" class="entrada">
            <?php
                if ($_POST) {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"{$_POST['n']}\">";
                } else {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"1234\">";
                }
            ?>
        </form>
        <h3>Salida</h3>
        <?php
            if ($_POST) {
                calcular();
            }
        ?>
    </section>
</body>
</html>

<?php
    function calcular() {
        $n = $_POST['n'];
        $modi = 0;

        if ($n % 2 == 0) {
            $n /= 2;
            $modi++;
        } else {
            $n += 1;
            $modi++;
        }

        if ($n % 100 == 0) {
            $n /= 100;
            $modi++;
        } else if ($n % 10 == 0) {
            $n /= 10;
            $modi++;
        }

        if ($n % 3 == 0) {
            $n -= 1;
            $modi++;
        }

        echo "<p>Valor final de <b>N</b>: " . $n . "</p>";
        echo "<p>Numero de veces que se modificó <b>N</b>: " . $modi . "</p>";
    }
?>