<?php

    $string = "55,6";
    $string = str_replace(',', '.', $string);
    $float = floatval($string);

    echo $float; 

?>
