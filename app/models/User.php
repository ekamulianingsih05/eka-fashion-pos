<?php class User{public static function findByUsername($u){$s=Database::connect()->prepare('SELECT * FROM users WHERE username=?');$s->execute([$u]);return $s->fetch();}}
