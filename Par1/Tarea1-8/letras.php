<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estail.css">
    <title>Adquisición de letras</title>
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
        <h2>Adquisición de letras</h2>
        <h3>Descripción</h3>
        <p>
            En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras. A Miguel 
            le encanta la letra "d" y quiere saber cuántas se va a poder comer de un paquete 
            que la escuela proporciona a todos sus alumnos. El paquete que la escuela entrega 
            es una palabra con letras minúsculas del alfabeto.
            <!-- De hecho, mi letra favorita es la W, no se por que xd. -->
        </p>
        <h3>Entrada</h3>
        <form action="letras.php" method="post" class="entrada xd">
            <?php
                if ($_POST) {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"{$_POST['n']}\">";
                } else {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"abcjdlllld\">";
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
        for($i = 1; $i < strlen($n); $i++){
            if($n[$i] == 'd')
                $cont++;
        }

        echo $cont;
    }
?>