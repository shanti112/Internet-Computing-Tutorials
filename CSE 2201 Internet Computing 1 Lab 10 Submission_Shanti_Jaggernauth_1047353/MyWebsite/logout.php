<?php
session_start();
session_unset();
session_destroy();
// Optional: expire the cookie immediately
setcookie("lastUser", "", time() - 3600);
setcookie("visitCount", "", time() - 3600);
header("Location: login.php");

exit();