<?php
require_once "./etc/config.php";

try {
    $db = new DB();
    $conn = $db->open();

    echo "Connected successfully to the database";
}
catch (PDOException $ex) {
    echo $ex->getMessage();
}
finally {
    if ($db != null && $db->isOpen()) {
        $db->close();
    }
}
?>

