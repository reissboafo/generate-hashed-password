<?php
// Password to be hashed
$password = 'Madam@2025';

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Output the hashed password
echo "Hashed Password: " . $hashedPassword;
?>
