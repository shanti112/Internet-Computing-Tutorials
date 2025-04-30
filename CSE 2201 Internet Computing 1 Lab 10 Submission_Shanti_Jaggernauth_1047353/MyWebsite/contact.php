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

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/script.js" defer></script>


<title>Contact Form</title>
</head>

<body>

<nav id="navbar">
      <a href="index.html"> Home</a> | <a href="about.html"> About</a> |
      <a href="gallery.html"> Gallery</a>|
      <a href="contact.html"> Contact</a>
      <a href="welcome.html"> Welcome Page</a>
    </nav>

    
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

<form  id="contactForm" method="POST" action="contact.php">
<label for="name">Name:</label>
<input type="text" name="name" id="name" value="<?php echo $name; ?>">
<label for="email">Email:</label>
<input type="text" name="email" id="email" value="<?php echo $email;
?>">
 <label for="password">Password:</label>
<input type="password" name="password" id="password" value="<?php echo
$password; ?>">
>Favourite Color:
          <input type="color" id="favouriteColor" required />
        </label>

<button type="submit">Submit</button>
</form>
</body>
</html>