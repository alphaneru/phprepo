<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estail.css">
    <title>Autores</title>
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
        <h2>Autores</h2>
        <h3>Descripción</h3>
        <p>
            Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de 
            los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica 
            más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable 
            es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La 
            referencia de documentos científicos anteriores funciona mucho y es frecuente que 
            un documento utilice dos convenciones de nomenclatura diferentes: la variación corta 
            (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga 
            variación (por ejemplo, Knuth-Morris-Pratt) Apellidos completos separados por guiones. 
            Encontramos que la mezcla de dos convenciones en un papel es estéticamente desagradable 
            y quisiera que usted escribiera un programa que transformara variaciones largas en 
            cortas.
        </p>
        <h3>Entrada</h3>
        <form action="autores.php" method="post" class="entrada xd">
            <?php
                if ($_POST) {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"{$_POST['n']}\">";
                } else {
                    echo "<input type=\"text\" name=\"n\" placeholder=\"Knuth-Morris-Pratt\">";
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
        $mayus = array($n[0]);
        $flag = false;
        for($i = 1; $i < strlen($n); $i++){
            if($flag){
                array_push($mayus, $n[$i]);
                $flag = false;
            }
            if($n[$i] == '-')
                $flag = true;
        }

        foreach($mayus as $letra){
            echo $letra;
        }
    }
?>