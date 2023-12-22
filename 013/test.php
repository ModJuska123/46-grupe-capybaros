<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["fawanimal"] = "cat";

echo "Session variables are set: ";
print_r ($_SESSION["favcolor"]);
echo'<br>';
print_r ($_SESSION["favanimal"]);

echo'<br><br>';
// Set session new variables
$_SESSION["favcolor"] = "blue";
$_SESSION["favanimal"] = "dog";

echo "Session new variables are set: ";
print_r ($_SESSION["favcolor"]);
echo'<br>';
print_r ($_SESSION["favanimal"]);
?>

</body>
</html>