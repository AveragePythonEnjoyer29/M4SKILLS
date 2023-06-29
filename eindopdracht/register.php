<?php
$dbname = "formulier.db";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

try {
    $conn = new PDO("sqlite:$dbname");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    echo "User aangemaakt";
} catch (PDOException $e) {
    die("Owo foutje terwijl we met de database aan het connecten waren :3" . $e->getMessage());
}
?>
