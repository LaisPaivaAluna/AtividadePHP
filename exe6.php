<?php
function verificarNumero($numero) {
    if ($numero > 0) {
        return "Positivo";
    } elseif ($numero < 0) {
        return "Negativo";
    } else {
        return "Zero";
    }
}

echo verificarNumero(-1);
?>