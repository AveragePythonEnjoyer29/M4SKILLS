<?php
    if (isset($_GET["naam"])) {
        $naam = $_GET["naam"];
    } elseif (isset($_POST["naam"])) {
        $naam = $_POST["naam"];
    }

    echo "Je naam is: ". $naam;
?>