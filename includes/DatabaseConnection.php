<?php
    $host = 'localhost';
    $dbname = 'joke_system';
    $username = 'root';
    $pw = '';

        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $pw);
?>