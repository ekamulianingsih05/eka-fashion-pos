<?php class Supplier{public static function all(){return Database::connect()->query('SELECT * FROM supplier ORDER BY nama')->fetchAll();}}
