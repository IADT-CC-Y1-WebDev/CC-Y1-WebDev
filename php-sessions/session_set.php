<?php 
// a session is started/resumed by calling the session_start() function
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['fav-color'] = "green";
$_SESSION['fav-animal'] = "dog";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set session data</title>
</head>
<body>
    <?php
    echo "Session variables were set!";
    ?>
</body>
</html>
