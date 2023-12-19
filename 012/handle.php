<?php

// POST - kai kreipiamasi i serveri pirma karta
if ($_SERVER['REQUEST_METHOD'] == 'POST') {    // jei i serv kreipiamasi POSTu, tada...
    $kas = $_POST['kas'] ?? '';                //sukuriamas naujas kintamasis, kuris tikrinamas antroje kodo dalyje
    header('Location: http://localhost/capybaros/012/handle.php');  //suformuojam redirecta
    die;          //mirstam
}

// GET - kai kreipiamasi i serveri antra karta
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello WEB mechanics!</h1>
    <h2><?php echo $kas ?? 'Nieko nėra' ?></h2>        


<form action="http://localhost/capybaros/012/handle.php" method="post">  
    <input type="text" name="kas">
    <button type="submit">POST IT</button>
</form>
    
</body>
</html>