<?php
define('DB_HOST', 'bdsn0q42sxbm1wlpmpae-mysql.services.clever-cloud.com');
define('DB_NAME', 'bdsn0q42sxbm1wlpmpae');
define('DB_USER', 'uswz2latdyj49um0');
define('DB_PASS', '08pjRXsfMPmvZJTnyLTE');

try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}