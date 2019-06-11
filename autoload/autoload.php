<?php
session_start();
require_once __DIR__."/../libraries/Database.php";
require_once __DIR__."/../libraries/Function.php";
$db = new Database;

define("ROOT",$_SERVER['DOCUMENT_ROOT']."/tutphp/public/uploads/");
$category=$db->fetchAll("category");

#lay san pham noi bat
$sqlNew="SELECT * FROM product WHERE 1 ORDER BY ID DESC LIMIT 4";
$productNew=$db->fetchsql($sqlNew);
?>
