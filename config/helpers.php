<?php
if (session_status()===PHP_SESSION_NONE) session_start();
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function redirect($url){header('Location: '.$url);exit;}
function flash($key,$value=null){if($value!==null){$_SESSION['_flash'][$key]=$value;return;} $v=$_SESSION['_flash'][$key]??null; unset($_SESSION['_flash'][$key]);return $v;}
function auth(){return $_SESSION['user']??null;}
function require_login(){if(!auth()) redirect('?page=login');}
function require_admin(){require_login();if(auth()['role']!=='admin'){http_response_code(403);exit('Akses ditolak.');}}
function rupiah($n){return 'Rp '.number_format($n,0,',','.');}
