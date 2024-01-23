<?php

$host = '127.0.0.1';  //nuo cia iki ..........
$db   = 'forest';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options); // ...cia ciskas is phpdelusions.net psl.

//DELETE FROM table_name WHERE condition;   // ....cia is W3 SQL Delete

$id = $_POST['id'];

$sql = "
DELETE FROM trees
WHERE id = ?
";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
// $pdo->query($sql);

header('Location: http://localhost/capybaros/db/');

