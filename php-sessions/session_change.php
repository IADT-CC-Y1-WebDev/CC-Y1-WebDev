<?php 
// a session is started/resumed by calling the session_start() function
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['fav-color'])) {
    $_SESSION['fav-color'] = "blue";
}
if (isset($_SESSION['fav-animal'])) {
    $_SESSION['fav-animal'] = "cat";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set session data</title>
</head>
<body>
    <?php
    echo "Session variables were changed!";
    ?>
</body>
</html>
