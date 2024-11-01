<?php
function converterDias($dias) {
    $anos = floor($dias / 365);
    $diasRestantes = $dias % 365;
    $meses = floor($diasRestantes / 30);
    $diasFinais = $diasRestantes % 30;

    return "$anos ano(s), $meses mês(es) e $diasFinais dia(s)";
}
 echo converterdias(500);
 ?>