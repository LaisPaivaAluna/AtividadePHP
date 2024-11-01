<?php
function calcularDesconto($valor, $percentual) {
    $desconto = $valor * ($percentual / 100);
    return $valor - $desconto;
}

echo calcularDesconto(100, 20);
?>
