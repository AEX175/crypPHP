<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php

require_once 'lib.php';
// Create a Cryp object
$cryp = new CrypX();

// Generate a random key (you can specify the number of bytes)
$key = $cryp->randKey(16);

// Generate a random IV
$iv = $cryp->randIv();

// Encrypt and decrypt, sending the $key and $iv variables for both encryption and decryption.
// If they don't match, decryption will fail.
$encrypted = $cryp->encrypt("Library for encryption and decryption of strings or integers, based on PHP", $key, $iv);
$decrypted = $cryp->decrypt($encrypted, $key, $iv);

// Print the values
echo "Key: " . $key . "<br>";
echo "IV: " . $iv . "<br>";
echo "Encrypted: " . $encrypted . "<br>";
echo "Decrypted: " . $decrypted . "<br>";
//Note: You can define the keys statically if you wish
