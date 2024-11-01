<?php
function calcularMedia($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media >= 6 ? "Aprovado" : "Reprovado";
}
echo calcularMedia(6,5,7);
?>