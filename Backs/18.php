<?php
$cellPhone = array('Marca' => 'Xiaomi', 'MODELO' => 'Redmi Note 8', 'COR' => 'Preto');

function checkKeyInArray($key, $array) {
    if (array_key_exists($key, $array)) {
        echo "A key $key foi encontrada no array";
    } else {
        echo "A key $key não foi encontrada no array";
    }
}

checkKeyInArray('MODELO', $cellPhone);
?>
