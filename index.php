<?php

function sommePlusUn($n1, $n2)
{
    return $n1 + $n2 + 1;
}

$nombre1 = 3;
$nombre2 = 2;
$resultat = sommePlusUn($nombre1, $nombre2);
$resultat2 = sommePlusUn(5, 7);

echo $resultat;
echo $resultat2;
