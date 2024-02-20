<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="oup.css">
    <title>Condicionales</title>
</head>
<body>
    <div class="rectangulo"></div>
    <h2>Estaciones del año</h2>
    <h3>Descripción</h3>
    <p>Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día <i>d</i> y un mes <i>m</i> según lo siguiente:</p>
    <ul>
        <li>Winter del 21 de diciembre al 20 de marzo</li>
        <li>Spring del 21 de marzo al 21 de junio</li>
        <li>Summer del 22 de junio al 22 de septiembre</li>
        <li>Fall del 23 de septiembre al 20 de diciembre</li>
    </ul>
    <p>Considerando la siguiente cantidad de días para cada mes:</p>
    <ul>
        <li>Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días</li>
        <li>Abril, Junio, Septiembre, y Noviembre 30 días</li>
        <li>Febrero 28 días</li>
        <li>Cualquier fecha fuera de estos rangos debe considerarse como no existente</li>
    </ul>
    <h3>Casos de prueba</h3>
    <table class="womp" border="1" cellspacing="3" cellpadding="3">
        <tr>
            <th>Caso de prueba</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>15 10</td>
            <td>
                <?php
                    $d = 15;
                    $m = 10;
                    $est = null;

                    if ($m <= 12 && $d <= 31) {
                        switch ($m) {
                            case 1:
                                $est = 'invierno';
                                break;
                            case 2:
                                if ($d > 28) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'invierno';
                                }
                                break;
                            case 3:
                                if ($d >= 21) {
                                    $est = 'primavera';
                                } else {
                                    $est = 'invierno';
                                }
                            case 4:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'primavera';
                                }
                                break;
                            case 5:
                                $est = 'primavera';
                                break;
                            case 6:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    if ($d >= 22) {
                                        $est = 'verano';
                                    } else {
                                        $est = 'primavera';
                                    }
                                }
                                break;
                            case 7:
                                $est = 'verano';
                                break;
                            case 8:
                                $est = 'verano';
                                break;
                            case 9:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    if ($d >= 23) {
                                        $est = 'otoño';
                                    } else {
                                        $est = 'verano';
                                    }
                                }
                                break;
                            case 10:
                                $est = 'otoño';
                                break;
                            case 11:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'otoño';
                                }
                                break;
                            case 12:
                                if ($d >= 21) {
                                    $est = 'invierno';
                                } else {
                                    $oto = false;
                                }
                                break;
                        }

                        switch ($est) {
                            case 'primavera':
                                echo "Spring";
                                break;
                            case 'verano':
                                echo "Summer";
                                break;
                            case 'otoño':
                                echo "Fall";
                                break;
                            case 'invierno':
                                echo "Winter";
                                break;
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>22 3</td>
            <td>
            <?php
                    $d = 22;
                    $m = 3;
                    $est = null;

                    if ($m <= 12 && $d <= 31) {
                        switch ($m) {
                            case 1:
                                $est = 'invierno';
                                break;
                            case 2:
                                if ($d > 28) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'invierno';
                                }
                                break;
                            case 3:
                                if ($d >= 21) {
                                    $est = 'primavera';
                                } else {
                                    $est = 'invierno';
                                }
                            case 4:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'primavera';
                                }
                                break;
                            case 5:
                                $est = 'primavera';
                                break;
                            case 6:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    if ($d >= 22) {
                                        $est = 'verano';
                                    } else {
                                        $est = 'primavera';
                                    }
                                }
                                break;
                            case 7:
                                $est = 'verano';
                                break;
                            case 8:
                                $est = 'verano';
                                break;
                            case 9:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    if ($d >= 23) {
                                        $est = 'otoño';
                                    } else {
                                        $est = 'verano';
                                    }
                                }
                                break;
                            case 10:
                                $est = 'otoño';
                                break;
                            case 11:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'otoño';
                                }
                                break;
                            case 12:
                                if ($d >= 21) {
                                    $est = 'invierno';
                                } else {
                                    $oto = false;
                                }
                                break;
                        }

                        switch ($est) {
                            case 'primavera':
                                echo "Spring";
                                break;
                            case 'verano':
                                echo "Summer";
                                break;
                            case 'otoño':
                                echo "Fall";
                                break;
                            case 'invierno':
                                echo "Winter";
                                break;
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>31 4</td>
            <td>
            <?php
                    $d = 31;
                    $m = 4;
                    $est = null;

                    if ($m <= 12 && $d <= 31) {
                        switch ($m) {
                            case 1:
                                $est = 'invierno';
                                break;
                            case 2:
                                if ($d > 28) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'invierno';
                                }
                                break;
                            case 3:
                                if ($d >= 21) {
                                    $est = 'primavera';
                                } else {
                                    $est = 'invierno';
                                }
                            case 4:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'primavera';
                                }
                                break;
                            case 5:
                                $est = 'primavera';
                                break;
                            case 6:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    if ($d >= 22) {
                                        $est = 'verano';
                                    } else {
                                        $est = 'primavera';
                                    }
                                }
                                break;
                            case 7:
                                $est = 'verano';
                                break;
                            case 8:
                                $est = 'verano';
                                break;
                            case 9:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    if ($d >= 23) {
                                        $est = 'otoño';
                                    } else {
                                        $est = 'verano';
                                    }
                                }
                                break;
                            case 10:
                                $est = 'otoño';
                                break;
                            case 11:
                                if ($d > 30) {
                                    echo "no existe la fecha";
                                } else {
                                    $est = 'otoño';
                                }
                                break;
                            case 12:
                                if ($d >= 21) {
                                    $est = 'invierno';
                                } else {
                                    $oto = false;
                                }
                                break;
                        }

                        switch ($est) {
                            case 'primavera':
                                echo "Spring";
                                break;
                            case 'verano':
                                echo "Summer";
                                break;
                            case 'otoño':
                                echo "Fall";
                                break;
                            case 'invierno':
                                echo "Winter";
                                break;
                        }
                    }
                ?>
            </td>
        </tr>
    </table>
    <h2>¿Cuántos valen 7?</h2>
    <h3>Descripción</h3>
    <p>Escribe un programa que lea dos enteros e imprima cuántos de ellos valen <i>7</i></p>
    <table class="womp" border="1" cellspacing="3" cellpadding="3">
        <tr>
            <th>Caso de prueba</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>-3 8</td>
            <td>
                <?php
                    $a = -3;
                    $b = 8;
                    $cont = 0;

                    if ($a == 7) {
                        $cont++;
                    }
                    if ($b == 7) {
                        $cont++;
                    }

                    echo $cont;
                ?>
            </td>
        </tr>
        <tr>
            <td>7 57</td>
            <td>
            <?php
                    $a = 7;
                    $b = 57;
                    $cont = 0;

                    if ($a == 7) {
                        $cont++;
                    }
                    if ($b == 7) {
                        $cont++;
                    }

                    echo $cont;
                ?>
            </td>
        </tr>
        <tr>
            <td>62 7</td>
            <td>
            <?php
                    $a = 62;
                    $b = 7;
                    $cont = 0;

                    if ($a == 7) {
                        $cont++;
                    }
                    if ($b == 7) {
                        $cont++;
                    }

                    echo $cont;
                ?>
            </td>
        </tr>
        <tr>
            <td>7 7</td>
            <td>
            <?php
                    $a = 7;
                    $b = 7;
                    $cont = 0;

                    if ($a == 7) {
                        $cont++;
                    }
                    if ($b == 7) {
                        $cont++;
                    }

                    echo $cont;
                ?>
            </td>
        </tr>
    </table>
    <h2>El mayor de tres números</h2>
    <h3>Descripción</h3>
    <p>Realiza un problema que imprima el mayor de tres números.</p>
    <table class="womp" border="1" cellspacing="3" cellpadding="3">
        <tr>
            <th>Caso de prueba</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>10<br>8<br>-7</td>
            <td>
            <?php
                    $a = 10;
                    $b = 8;
                    $c = -7;

                    if ($a >= $b) {
                        if ($a >= $c) {
                            echo $a;
                        } else {
                            if ($b >= $c) {
                                echo $b;
                            } else {
                                echo $c;
                            }
                        }
                    } else if ($b >= $c) {
                        if ($b >= $a) {
                            echo $b;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    } else {
                        if ($c >= $a) {
                            echo $c;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>10<br>81<br>101</td>
            <td>
            <?php
                    $a = 10;
                    $b = 81;
                    $c = 101;

                    if ($a >= $b) {
                        if ($a >= $c) {
                            echo $a;
                        } else {
                            if ($b >= $c) {
                                echo $b;
                            } else {
                                echo $c;
                            }
                        }
                    } else if ($b >= $c) {
                        if ($b >= $a) {
                            echo $b;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    } else {
                        if ($c >= $a) {
                            echo $c;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>11<br>11<br>11</td>
            <td>
            <?php
                    $a = 11;
                    $b = 11;
                    $c = 11;

                    if ($a >= $b) {
                        if ($a >= $c) {
                            echo $a;
                        } else {
                            if ($b >= $c) {
                                echo $b;
                            } else {
                                echo $c;
                            }
                        }
                    } else if ($b >= $c) {
                        if ($b >= $a) {
                            echo $b;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    } else {
                        if ($c >= $a) {
                            echo $c;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>10<br>810<br>101</td>
            <td>
            <?php
                    $a = 10;
                    $b = 810;
                    $c = 101;

                    if ($a >= $b) {
                        if ($a >= $c) {
                            echo $a;
                        } else {
                            if ($b >= $c) {
                                echo $b;
                            } else {
                                echo $c;
                            }
                        }
                    } else if ($b >= $c) {
                        if ($b >= $a) {
                            echo $b;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    } else {
                        if ($c >= $a) {
                            echo $c;
                        } else {
                            if ($a >= $c) {
                                echo $a;
                            } else {
                                echo $c;
                            }
                        }
                    }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>