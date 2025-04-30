<?php
session_start();
// Try to get name from session or cookie
$username = $_SESSION['username'] ?? $_COOKIE['lastUser'] ?? null;
if (!$username) {
    // No session or cookie available
    header("Location: login.php");
    exit();
}

// Count visits with a cookie
$visitCount = isset($_COOKIE['visitCount']) ? $_COOKIE['visitCount'] + 1 : 1;
setcookie('visitCount', $visitCount, time() + 900);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
<p>This is your dashboard.</p>

<?php
// Show visit count if available
if (isset($_COOKIE['visitCount'])) {
    echo "<p>You have visited this page {$visitCount} times.</p>";
}


if (isset($_COOKIE['lastLogin'])) {
    echo "<p>Last login: " . date("Y-m-d H:i:s", $_COOKIE['lastLogin']) . "</p>";
}
?>

<p><a href="logout.php">Logout</a></p>

</body>
</html>