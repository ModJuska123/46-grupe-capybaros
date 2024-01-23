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

$id = $_POST['id'];
$height = $_POST['height'];

// UPDATE table_name
// SET column1 = value1, column2 = value2, ...
// WHERE condition;

$sql = "
UPDATE trees
SET height = :h
WHERE id = :id
";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'id'=>$id,
    'h'=>$height
]);

header('Location: http://localhost/capybaros/db/');
