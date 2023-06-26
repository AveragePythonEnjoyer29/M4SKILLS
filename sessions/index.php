<?php
session_start();

if (!isset($_SESSION["naam"])) {
    echo "nee";
    /* redirect naar afhandeling.php als naam nog niet bestaat */
    //header("Location: afhandeling.php");
} else {
    /* anders echo'en we het gewoon */
    echo "hallo, mijn naam is " . $_SESSION["naam"];
}
?>