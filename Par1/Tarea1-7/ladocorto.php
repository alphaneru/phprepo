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
        <h2>El lado más corto</h2>
        <h3>Descripción</h3>
        <p>
            Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, 
            calcule la longitud de su lado más corto.
        </p>
        <h3>Entrada</h3>
        <form action="ladocorto.php" method="post" class="entrada xd">
            <?php
                if ($_POST) {
                    echo "<input type=\"text\" name=\"num\" placeholder=\"{$_POST['n']}\">";
                } else {
                    echo "<input type=\"text\" name=\"num\" placeholder=\"10.1 10.2 20.2 10.3 22.3 4.1 7.5 0.9\">";
                }
            ?>
        </form>
        <h3>Salida</h3>
        <?php
            if ($_POST) {
                problema_horrible();
            }
        ?>
    </section>
</body>
</html>

<?php
    function dist($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }

    function problema_horrible() {
        $numeros = explode(' ', $_POST['num']);
        $lado1 = dist($numeros[0], $numeros[1], $numeros[2], $numeros[3]);
        $lado2 = dist($numeros[2], $numeros[3], $numeros[4], $numeros[5]);
        $lado3 = dist($numeros[4], $numeros[5], $numeros[6], $numeros[7]);
        $lado4 = dist($numeros[6], $numeros[7], $numeros[0], $numeros[1]);
        $ladomini = $lado1;

        switch ($ladomini) {
            case $lado2 < $ladomini:
                $ladomini = $lado2;
                break;
            case $lado3 < $ladomini:
                $ladomini = $lado3;
                break;
            case $lado4 < $ladomini:
                $ladomini = $lado4;
                break;
        }

        echo "<p>Lado más corto: " . round($ladomini, 6) . "</p>";

    }
?>