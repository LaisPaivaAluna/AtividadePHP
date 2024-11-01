<?php
function calcularFatorial($numero) {
    if ($numero < 0) return null; // Fatorial não definido para números negativos
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }
    return $fatorial;
}

echo calcularFatorial(4);
?>