<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    if (!empty($username)) {
        $_SESSION['username'] = $username; // Store in session
        setcookie("lastUser", $username, time() + 3600); // Store username in cookie for 1 hour
        setcookie("lastLogin", time(), time() + 3600); // Store login timestamp in cookie for 1 hour
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Please enter a username.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST" action="login.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username">
    <button type="submit">Login</button>
</form>

</body>
</html>