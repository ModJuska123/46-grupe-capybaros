<?php
    session_start();

    if (!isset($_SESSION['login']) || $_SESSION['login'] != 'sitas yra prisilogines') {
        header('Location: http://localhost/capybaros/homework/bankas/auth/login.php');
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside the Bank page</title>
</head>
<body>
    <h1>Welcome to Bank members page</h1>
    <h2>Hello, <?= $_SESSION['name'] ?></h2>
    <a href="http://localhost/capybaros/homework/bankas/read.php">Go to main page</a>
    <form action="http://localhost/capybaros/homework/bankas/auth/logout.php" method="post">
        <button type="submit">Logout</button>
    </form>

    
</body>
</html>