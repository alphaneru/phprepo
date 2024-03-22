<?php
function valorPalabra($palabra) {
    $letras = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $valor = array(1, 5, 3, 3, 3, 4, 5, 6, 8, 7, 8, 9, 7, 6, 9, 0, 1, 4, 2, 5, 7, 4, 2, 2, 6, 1);

    $suma = 0;

    for ($i = 0; $i < strlen($palabra); $i++) {
        $ind = 0;
        while ($letras[$ind] != $palabra[$i]) {
            $ind++;
        }
        $suma += $valor[$ind];
    }

    return $suma;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/problemas.css">
    <title>Juego de letras</title>
</head>

<body>
    <header class="header">
        <div class="inicio">
            <a href="../index.html"><img src="../img/holamundo.jpg"></a>
        </div>
        <div class="menu">
            <a href="2_2-1.php">Evaluando Una Función Rara</a>
            <a href="2_2-2.php">Juego de letras</a>
        </div>
    </header>
    <h1>Juego de letras</h1>
    <div class="container">
        <div class="problema">
            <h2>Descripción</h2>
            <p>
                En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su posición en el
                teclado: las letras Q, A, Z reciben el valor <i>1</i>, las letras W, S y X reciben el valor <i>2</i> y así
                sucesivamente hasta que las letras O y L reciben el valor 9 y la letra P recibe el valor 0. Una palabra
                formada por estas letras recibe como valor la suma de los valores de las letras que la forman. Por ejemplo,
                la palabra UAM recibe como valor <i>7 + 1 + 7 = 15</i>. Escribe un programa que determine el valor <i>v</i>
                de una palabra <i>p</i>.
            </p>
        </div>
        <div class="formulario">
            <h2>Entrada</h2>
            <form action="2_2-2.php" method="post">
                <table>
                    <tr>
                        <td><input type="text" name="palabra" class="entrada"></td>
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
            echo valorPalabra(strtoupper($_POST["palabra"]));
        } else {
            echo "No has enviado ningún valor.";
        }
        ?>
    </div>
</body>

</html>