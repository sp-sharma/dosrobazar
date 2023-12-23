<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page or any other page as needed
header("Location: index.php");
exit();
?>
