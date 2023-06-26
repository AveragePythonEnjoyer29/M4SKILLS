<?php
function fillArray(int $length=10): array {
    $array = array();
    for ($i=0; $i < $length;$i++) {
        $array[i] = i+1;
    }

    return $array
}

echo fillArray(50);
?>