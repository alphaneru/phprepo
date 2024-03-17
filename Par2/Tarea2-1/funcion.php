<?php
    function f($a) {
        return 4 * $a ** 3 + g(2 * $a, -3 * $a);
    }

    function g($b, $c) {
        return (7 * $b - 3) % ($c ** 2 + 1);
    }

    function h($x, $y, $z){
        // tal vez ya no me gusta tanto no tener que especificar el tipo de dato
        return f((int)($x / $y)) + 3 * g((int)($z / $y), $x);
    }

    function winnipeg() {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $z = $_POST['z'];

        echo "<h1 align=\"center\">" . h($x, $y, $z) . "</h1>";
    }
?>

<head>
    <link rel="stylesheet" href="main.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h2><span class="texto-bonito">Resultado</span></h2>
    </header>

    <?php
        if ($_POST) {
            winnipeg();
        }
    ?>
</body>