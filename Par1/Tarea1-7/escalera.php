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
        <h2>Escalera de asteriscos</h2>
        <h3>Descripción</h3>
        <p>
            Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron la puerta demasiado alta. 
            Tu misión es ayudar a Inés a subir a su casa construyendo una escalera de longitud y altura <b>N</b> hecha de asteriscos.
        </p>
        <h3>Entrada</h3>
        <form action="escalera.php" method="post" class="entrada">
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
                escalera();
            }
        ?>
    </section>
</body>
</html>

<?php
    function escalera() {
        $n = $_POST['n'];

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $i + 1; $j++) {
                echo "#";
            }
            echo "<br>";
        }
    }
?>