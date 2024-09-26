<?php
// Function to generate random password
function generateRandomPassword($length = 6) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charactersLength = strlen($characters);
    $randomPassword = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, $charactersLength - 1)];
    }
    
    return $randomPassword;
}

$passwords = [];

// Generate random passwords and store them in the array
for ($i = 0; $i < 30; $i++) { // Generate 30 passwords
    $passwords[] = generateRandomPassword(6); // Each password is 6 characters long
}

// Return the passwords as a JSON response
header('Content-Type: application/json');
echo json_encode($passwords);
?>
