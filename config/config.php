<?php
// Veritabanı ayarları
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'password');
define('DB_NAME', 'villa_rental');

// Veritabanı bağlantısı
function db_connect() {
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$connection) {
        die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
    }

    return $connection;
}
?>