<?php
$maand = 3;
switch ($maand) {
    case 1:
        $maand = "januari";
        break;
    case 2:
        $maand = "februari";
        break;
    case 3:
        $maand = "maart";
        break;
    
    default:
        $maand = "weet niet";
        break;
}
echo $maand;
?>
