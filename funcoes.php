<?php

function somar($numero1, $numero2) {
    echo 'antes do return ';

    return $numero1 + $numero2;

    echo 'Depois do return';
}

$soma1 = somar(10, 20);
echo $soma1;

echo '<br>';
echo somar(100, 200);
