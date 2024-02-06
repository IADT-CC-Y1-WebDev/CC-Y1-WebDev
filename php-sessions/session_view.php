<?php 
// a session is started/resumed by calling the session_start() function
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View session data</title>
</head>
<body>
    <?php
    echo '<pre>$_SESSION = ';
    print_r($_SESSION);
    echo '</pre>';
    ?>
</body>
</html>
