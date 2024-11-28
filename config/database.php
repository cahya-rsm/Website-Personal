<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'localhost';
$dbname = 'db_matematika';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    die();
}

// Create table if not exists
try {
    $sql = "CREATE TABLE IF NOT EXISTS hasil_latihan (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nama VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        nilai DECIMAL(5,2) NOT NULL,
        waktu_mulai DATETIME NOT NULL,
        waktu_selesai DATETIME NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}
