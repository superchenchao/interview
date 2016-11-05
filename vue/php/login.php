<?php
// 指定允许其他域名访问
header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Credentials: true");
	header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
	header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
	header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
	header("Content-Type: application/json; charset=utf-8");

$items = array (
    array("id" => "1111", "name" => "iphone", "price" => "4000"),
    array("id" => "2222", "name" => "iMac", "price" => "5000"),
    array("id" => "3333", "name" => "iPad", "price" => "6000"),
    array("id" => "4444", "name" => "MacBook", "price" => "7000"),
    array("id" => "5555", "name" => "MacBook Pro", "price" => "8000"),
    array("id" => "6666", "name" => "surface", "price" => "9000"),
    array("id" => "7777", "name" => "note7", "price" => "10000"),
);
echo json_encode($items);
?>