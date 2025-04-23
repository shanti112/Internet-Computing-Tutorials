<!DOCTYPE html>
<?php
// Initialize variables
$name = $email = $password = "";
$errors = [];
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Validate name
if (empty($_POST['name'])) {
$errors[] = "Name is required.";
} else {
$name = htmlspecialchars($_POST['name']); // Prevents XSS
}
// Validate email
if (empty($_POST['email'])) {
$errors[] = "Email is required.";
} else {
$email = htmlspecialchars($_POST['email']);
}
// Validate password
if (empty($_POST['password'])) {
$errors[] = "Password is required.";
} else {
$password = htmlspecialchars($_POST['password']);
}
}
?>

<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h1>Contact Us</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($errors)) {
// Display errors as a list in red

echo "<ul style='color:red;'>";
foreach ($errors as $error) {
echo "<li>$error</li>";
}
echo "</ul>";
} else {
// Display success message
echo "<p style='color:green;'>Thank you, $name! We received your
email: $email.</p>";
}
}
?>

<form method="POST" action="contact.php">
<input type="text" name="name" id="name" value="<?php echo $name; ?>">
<input type="text" name="email" id="email" value="<?php echo $email;
?>">
<input type="password" name="password" id="password" value="<?php echo
$password; ?>">
<button type="submit">Submit</button>
</form>
</body>
</html>