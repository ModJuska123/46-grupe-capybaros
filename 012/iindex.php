<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <h1>Hello WEB mechanics!</h1>


    <a href="http://localhost/capybaros/012/?dideleszuvys=banginiai">Banginiai</a>
    <a href="http://localhost/capybaros/012/?mazoszuvys=kilbukai">Kilbukai</a>
    <a href="http://localhost/capybaros/012/?nemazoszuvys=rykliai&rykliai=pavojingi">Rykliai</a>


    <!-- <a href="http://localhost/capybaros/012/?kas=kazkas">Linkas kazkas</a>
    <a href="http://localhost/capybaros/012/?kas=kitas&kitas=kitasDalykas">Linkas kitas ir kitas</a> -->
    <!-- <a href="http://localhost/capybaros/012/?kas=kitas">Linkas kitas</a> -->
    
    <?php
   

    print_r($_GET);

    print_r($_POST);

    echo 'Metodas yra:<br>';             //aprasymas server nurodomo metodo

    print_r($_SERVER['REQUEST_METHOD']);

    if (($_GET['dideleszuvys'] ?? '') == 'banginiai') {
        echo '<h2>Labas, banginiai!</h2>';
    }
    if (($_GET['mazoszuvys'] ?? '') == 'kilbukai') {
        echo '<h2>Labas, kilbukai!</h2>';
    }
    if (($_GET['nemazoszuvys'] ?? '') == 'rykliai') {
        echo '<h2>Labas, rykliai!</h2>';
    }
    ?>
    <form action="http://localhost/capybaros/012/" method="get">
        <input type="text" name="naujaszodis">
        <button type="submit">GET IT</button>
        <input type="color" name="spalva">
        <input type="hidden" name="a" value="5">
    </form>
    
    
    <form action="http://localhost/capybaros/012/?z=88" method="post">
        <input type="text" name="kas">
        <input type="color" name="kitas">
        <input type="hidden" name="a" value="5">
        <button type="submit">POST IT</button>
    </form>

    <!-- <form action="http://localhost/capybaros/012/" method="get">  //klases darbas
        <input type="text" name="kas">
        <input type="color" name="kitas">
        <input type="hidden" name="a" value="5">
        <button type="submit">GET IT</button>
    </form>

    <form action="http://localhost/capybaros/012/?z=88" method="post"> //klases darbas
        <input type="text" name="kas">
        <input type="color" name="kitas">
        <input type="hidden" name="a" value="5">
        <button type="submit">POST IT</button>
    </form>
    
    </pre>
</body>
</html> -->

//<?php

// Query GET, POST
// Body POST
// Params GET, POST