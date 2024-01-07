<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('HTTP/1.1 405 Method not Allowed');
    die;
}

if (isset($_SESSION['login']) && ($_SESSION['login']) == 'sitas yra prisilogines') {
    unset($_SESSION['login']);
    unset($_SESSION['name']);
    exit;
}
header('Location: http://localhost/capybaros/homework/bankas/auth/index.php');