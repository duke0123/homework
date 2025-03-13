<?php

$dbhost = 'localhost';
$dbname = 'ecommerce';
$dbuser = 'root';
$dbpassword = 'root';

if ($_SERVER['HTTP_HOST'] == "duke0123.pairserver.com") {
    $dbhost = 'db178.pair.com';
    $dbname = 'duke0123_ecommerce';
    $dbuser = 'duke0123_2_w';
    $dbpassword = 'EP8V5vWjiiLFiqip';
}



$db = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=utf8",
    $dbuser,
    $dbpassword
); // Connect to YOUR_DB_NAME db on MySQL on HOSTNAME using YOUR_DB_USER_NAME and YOUR_DB_PW credentials
