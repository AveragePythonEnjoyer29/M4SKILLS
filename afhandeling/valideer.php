<?php
session_start();

function validateNumericInput($input) {
    return is_numeric($input);
}

$input = $_GET["number"];

if (!validateNumericInput($input)) {
    echo $input;
    $_SESSION["errors"][] = "Invalid integer passed";
}

$_SESSION["input"]["number"] = $input;

header("Location: index.php");
exit();
?>