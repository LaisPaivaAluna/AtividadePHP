<?php
function calcularJurosSimples($capitalInicial, $taxaJuros, $tempo) {
    $valorFinal = $capitalInicial + ($capitalInicial * ($taxaJuros / 100) * $tempo);
    return $valorFinal;
}


echo calcularJurosSimples(100, 2, 10);
?>
