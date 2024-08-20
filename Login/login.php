<?php
require 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            echo "Login successful. Welcome, " . htmlspecialchars($username) . "!";
        } else {
            echo "Invalid username or password. <a href='index.html'>Try again</a>";
        }
    } else {
        echo "Invalid username or password. <a href='index.html'>Try again</a>";
    }

    $stmt->close();
    $conn->close();
}
?>
