<?php
// Define a constant to allow legitimate access
define('ACCESS_ALLOWED', true);


// Prevent direct access
// if (basename($_SERVER['PHP_SELF']) === 'index.php') {
//     http_response_code(403);
//     die('Sorry... direct access is not allowed.');
// }

// if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'])) {
//     http_response_code(403);
//     die('Sorry... direct access is not allowed.');
// }


require __DIR__ . '/../vendor/autoload.php';

use Garry\GarryDateTimeHandler\DateTimeHandler;

$dateTimeHandler = new DateTimeHandler();
echo "Current Date and Time: " . $dateTimeHandler->getCurrentDateTime();
