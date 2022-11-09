<?php
//http://localhost/review/index4.php?v1=5&v2=10
$p1 = $_GET["v1"];
$p2 = $_GET["v2"];

echo "Valores recebidos através do método GET : ($p1 e $p2)<br>";
echo "A soma dos valores recebidos = $p1+$p2 <br>";
echo "A soma dos valores recebidos = ".($p1+$p2);
echo "Aproveitando, se usarmos number_format o valor 
= R$ ".number_format(($p1+$p2),2)."<br>";
echo "Aproveitando, se usarmos number_format o valor 
= R$ ".number_format(($p1+$p2),2,",",".");

?>