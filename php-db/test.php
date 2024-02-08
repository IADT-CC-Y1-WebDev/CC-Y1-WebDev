<?php
require_once "./etc/config.php";

try {
    $data = [
        "name" => "Patrizio Bruno",
        "age" => 53,
        "category" => "Sport",
        "experience" => "Competent",
        "languages" => "Irish,Spanish"
    ];
    $profile = new Profile($data);
    echo "<pre>";
    print_r($profile);
    echo "</pre>";
    
    $profile->save();
    echo "<pre>";
    print_r($profile);
    echo "</pre>";

    $profile->age = 54;
    $profile->experience = "Expert";
    $profile->save();
    echo "<pre>";
    print_r($profile);
    echo "</pre>";
}
catch (PDOException $ex) {
    echo $ex->getMessage();
}
?>

