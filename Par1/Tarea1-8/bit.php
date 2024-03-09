<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estail.css">
    <title>Bit de paridad</title>
</head>
<body>
    <header>
        <h1><a href="index.php">Tarea 1.8</a></h1>
        <h2>Problemas de <span class="texto-bonito">manejo de strings</span></h2>
    </header>
    <section>
        <div class="menu">
            <ul class="problemas">
                <li><a href="bit.php">Bit de paridad</a></li>
                <li><a href="autores.php">Autores</a></li>
                <li><a href="letras.php">Adquisición de letras</a></li>
            </ul>
        </div>
    </section>
    <section class="descripcion">
        <h2>Bit de paridad</h2>
        <h3>Descripción</h3>
        <p>
            Un <b>bit de paridad</b> es un dígito binario que indica si el número de bits con un valor de 1 
            en un conjunto de bits es par o impar. Los bits de paridad conforman el método de detección 
            de errores más simple. Existen dos variantes de este método:
        </p>
        <ul>
            <li>Bit de paridad par</li>
            <li>Bit de paridad impar.</li>
        </ul>
        <p>
            En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad 
            se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. Si el 
            conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par. Escribe un 
            programa que sirva para añadir un bit de paridad par a una secuencia de bits.
        </p>
        <h3>Entrada</h3>
        <form action="bit.php" method="post" class="entrada">
            <?php
                if ($_POST) {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"{$_POST['n']}\">";
                } else {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"01100011\">";
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
        $cont = 0;

        for($i = 0; $i < strlen($n); $i++){
            if($n[$i] == '1'){
                $cont++;
            }
        }

        if($cont % 2 == 0){
            echo $n . "0";
        } else {
            echo $n . "1";
        }
    }
?>