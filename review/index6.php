<?php

if(isset($_GET[$valor])){
    $p1 = $_GET["valor"];
    echo "Valores recebidos através do método GET: ($p1)<br>";
    $p1 += 3;
    echo "Resultado da operação $p1 <br>";
    echo "Valor = $p1, incrementando fica ".++$p1." <br>";
}
?>