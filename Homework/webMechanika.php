<!-- WEB mechanika -->
<!-- 1 uzdavinys -->

<?php
// Check if the 'color' parameter is set in the URL
if(isset($_GET['color']) && $_GET['color'] == 1) {
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
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Color Change Page</h1>
    <a href="index.php">Default Color</a>
    <a href="index.php?color=1">Red Color</a>
</body>
</html>
