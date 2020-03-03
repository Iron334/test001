<?php
$dsn = 'mysql:host=localhost;dbname=company';
$user = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $user, $password, $options);
} catch(PDOException $e) {

}