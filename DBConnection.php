<?php

$host = "localhost";
$db = "registracija";
$user = "root";
$pass = "1100ne";

$dsn = "mysql:host=$host; dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
}
