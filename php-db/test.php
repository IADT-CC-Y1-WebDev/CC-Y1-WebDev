<?php
require_once "./etc/config.php";

try {
    $profiles = Profile::findAll();
    echo "<pre>";
    print_r($profiles);
    echo "</pre>";
}
catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>

