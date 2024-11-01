<?php
function classificarIdade($idade) {
    if ($idade >= 0 && $idade <= 12) {
        return "Criança";
    } elseif ($idade >= 13 && $idade <= 17) {
        return "Adolescente";
    } elseif ($idade >= 18 && $idade <= 64) {
        return "Adulto";
    } else {
        return "Idoso";
    }
}


echo classificarIdade(12) . "<br>";
echo classificarIdade(17) . "<br>"; 
echo classificarIdade(64) . "<br>";
echo classificarIdade(70) . "<br>";
?>
