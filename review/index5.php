<?php

$p1 = $_GET["v1"];
$p2 = $_GET["v2"];

echo "Valores recebidos através do método GET: ($p1 e $p2)<br>";

//$p1 = $p1 + $p2;
$p1 += $p2;
echo "Resultado da operação $p1 <br>";
echo "V2 = $p2, incrementando fica ".++$p2." <br>";

//$p1 = $p1 - $p2;
$p1 -= $p2;
echo "Resultado da operação $p1 <br>";
echo "V2 = $p2, decrementando fica ".++$p2." <br>";

?>