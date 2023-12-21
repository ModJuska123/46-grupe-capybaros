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
$_SESSION["favanimal"] = "cat";

echo "Session variables are set: ";
print_r ($_SESSION["favcolor"]);
echo'<br>';
print_r ($_SESSION["favcolor"]);

echo'<br><br>';
// Set session new variables
$_SESSION["newfavcolor"] = "blue";
$_SESSION["newfavanimal"] = "dog";

echo "Session new variables are set: ";
print_r ($_SESSION["favcolor"]);
echo'<br>';
print_r ($_SESSION["favcolor"]);
?>

</body>
</html>