<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");  // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="/Welcome/styles/welcome-styles.css">  <!-- Optional: Add your CSS -->
</head>

<body>
    <div class="welcome-container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>You have successfully logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>
