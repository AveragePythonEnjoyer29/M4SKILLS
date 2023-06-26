<?php
session_start();

$_SESSION["naam"] = "oscar";

header("Location: /");
?>