<?php
    $technologies = array(0 => 'react', 1 => 'angular', 2 => 'vue', 3 => 'footer');

    function checkElementInArray($element, $array) {
        if (in_array($element, $array)) {
            echo "O elemento $element está no array";
        } else {
            echo "O elemento $element não está no array";
        }
    }

    checkElementInArray('vue', $technologies);
?>
