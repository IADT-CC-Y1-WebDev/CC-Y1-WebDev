<?php
require_once "./etc/config.php";

try {
    $profile = Profile::findById(1);
    if ($profile !== null) {
        echo "<pre>";
        print_r($profile);
        echo "</pre>";
    }
    else {
        echo "<p>Profile not found.</p>";
    }

    $profile = Profile::findById(-1);
    if ($profile !== null) {
        echo "<pre>";
        print_r($profile);
        echo "</pre>";
    }
    else {
        echo "<p>Profile not found.</p>";
    }
}
catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>

