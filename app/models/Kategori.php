<?php class Kategori{public static function all(){return Database::connect()->query('SELECT * FROM kategori ORDER BY nama')->fetchAll();}}
