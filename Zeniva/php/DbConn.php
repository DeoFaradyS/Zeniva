<?php
require 'config.php'; // memuat file konfigurasi

class DbConn
{
    public $database;

    public function __construct()
    {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=UTF8";

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PWD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Aktifkan mode exception
            $this->database = $pdo;
            // echo "database telah tersambung.";
        } catch (PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
        }
    }
}
?>
