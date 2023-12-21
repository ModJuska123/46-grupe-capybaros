<!-- WEB mechanika -->
<!-- 1 uzdavinys -----------------neradau, kodel su get neveikia????????-->

<?php
// Check if the 'color' parameter is set in the URL
print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>';
echo 'Metodas yra:<br>';
print_r($_SERVER['REQUEST_METHOD']);



if(($_GET['color']?? '') == 1) {
    $backgroundColor = 'red'; // Set background color to red
} else {
    $backgroundColor = 'black'; // Set background color to black
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Change Page</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: white;
            text-align: center;
            padding: 50px;
        }
        a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 10px;
            border: 1px solid white;
         
        }
        </style>
</head>
<body>
    <h1>Tema: 7. WEB mechanika</h1>
   
    <form action="http://localhost/capybaros/Homework/webMechanika.php" method="post">
        <button type="submit">webMechanika</button>
    </form>
    
    <form action="http://localhost/capybaros/Homework/webMechanika.php?color=1" method="post">
        <button type="submit">webMechanika GET</button>
    </form>

</body>
</html>

echo "<br><br><br><br><br><br><br>"
<!-- 2 uzdavinys -->

<?php
// Check if the 'color' parameter is set in the URL
print_r($_GET);
echo '<br>';
print_r($_POST);
echo '<br>';
echo 'Metodas yra:<br>';
print_r($_SERVER['REQUEST_METHOD']);



if(($_GET['color']?? '') == 1) {
    $backgroundColor = 'red'; // Set background color to red
} else {
    $backgroundColor = 'black'; // Set background color to black
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Change Page</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: white;
            text-align: center;
            padding: 50px;
        }
        a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin: 10px;
            border: 1px solid white;
         
        }
        </style>
</head>
<body>
    <h1>Tema: 7. WEB mechanika</h1>
   
    <form action="http://localhost/capybaros/Homework/webMechanika.php" method="post">
        <button type="submit">webMechanika</button>
    </form>
    
    <form action="http://localhost/capybaros/Homework/webMechanika.php?color=1" method="post">
        <input type="text" name="name">
      
    </form>

</body>
</html>