<?php
require_once __DIR__.'/config/database.php'; require_once __DIR__.'/config/helpers.php';
foreach(glob(__DIR__.'/app/controllers/*.php') as $f) require_once $f;
$routes=require __DIR__.'/config/routes.php'; $page=$_GET['page']??$_GET['url']??(auth()?'dashboard':'login');
if(isset($routes[$page])){[$c,$m]=explode('@',$routes[$page]);(new $c)->$m();}else{http_response_code(404);echo 'Halaman tidak ditemukan';}
