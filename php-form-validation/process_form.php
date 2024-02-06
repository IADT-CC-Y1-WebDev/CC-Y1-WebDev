<?php
require_once "./etc/config.php";

function redirect($url) {
    header("Location: $url");
    exit();
}

$validator = new ProfileFormValidator($_POST);
$valid = $validator->validate();
if ($valid) {
    // redirect the browser to the success page
    redirect("success.php");
}
else {
    $errors = $validator->errors();
    // redirect the browser back to the form
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION["form-data"] =  $_POST;
    $_SESSION["form-errors"] = $errors;
    redirect("form.php");
}
?>