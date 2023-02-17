<?php

$valores = $datosParaVista['datos'];

if ($valores === null) {
    echo "No hay entradas";
} else {
    echo "<h1>Top 3 entradas</h1>";
    foreach ($valores as $valor) {
        $entrada = $valores['entrada'];
        $megustas = $valores['cantidad'];
        echo $entrada;
    }

}

?>

