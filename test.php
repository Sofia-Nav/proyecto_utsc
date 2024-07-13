<?php
$numeros = range(1, 10);

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . "\\n\n";
}

function invertirArreglo($arreglo) {
    $arregloInvertido = array();
    for ($i = count($arreglo) - 1; $i >= 0; $i--) {
        $arregloInvertido[] = $arreglo[$i];
    }
    return $arregloInvertido;
}


$arregloInvertido = invertirArreglo($numeros);


foreach ($arregloInvertido as $numero) {
    echo $numero . "\\n\n";
}
?>