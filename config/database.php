<?php
class Database {
    public static function connect() {
        static $pdo;
        if ($pdo) return $pdo;
        $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];
        try {
            $pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=eka-fashion;charset=utf8mb4', 'root', '', $options);
        } catch (PDOException $error) {
            throw new RuntimeException('Database eka-fashion belum tersedia. Import file eka-fashion.sql melalui phpMyAdmin terlebih dahulu. Detail: '.$error->getMessage());
        }
        return $pdo;
    }
}
