<?php class Pelanggan{public static function all(){return Database::connect()->query('SELECT * FROM pelanggan ORDER BY nama')->fetchAll();}}
