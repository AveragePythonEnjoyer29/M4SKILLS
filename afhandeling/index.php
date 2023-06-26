<?php
session_start();

if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo $error . "<br>";
    }
}

if (isset($_SESSION['input'])) {
    foreach ($_SESSION['input'] as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
} 

var_dump($_SESSION);
?>