<?php
require_once "./etc/config.php";

function redirect($url) {
    header("Location: $url");
    exit();
}

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
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
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit();
}
?>