<?php class Produk{public static function all(){return Database::connect()->query('SELECT * FROM produk ORDER BY nama')->fetchAll();}}
