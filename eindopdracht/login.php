<?php
$dbname = "formulier.db";

if (!isset($_POST['username']) || !isset($_POST['password'])) {
    die("Ja makker je bent je naam of wachtwoord vergeten");
}

$login_username = $_POST['username'];
$login_password = $_POST['password'];

try {
    $conn = new PDO("sqlite:$dbname");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM users WHERE username = :username";
    
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $login_username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // ternary operator ftw
    echo ($user && $user['password'] == $login_password) ? "login werkt" : "login werkt niet";

} catch (PDOException $exc) { 
    die("Owo foutje terwijl we met de database aan het connection waren :3" . $exc->getMessage());
}

?>
