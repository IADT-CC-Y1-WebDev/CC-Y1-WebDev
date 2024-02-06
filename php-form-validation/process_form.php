<?php
function redirect($url) {
    header("Location: $url");
    exit();
}
//-----------------------------------------------
// you must be over 21 to view the success page
//-----------------------------------------------
if ($_POST['age'] >= 21) {
    // redirect the browser to the success page
    redirect("success.php");
}
else {
    $errors = [
        "name" => "Please enter a name",
        "age" => "Age must be greater than or equal to 21",
        "category" => "Please choose a category",
        "experience" => "Please select your experience level",
        "languages" => "Please choose at least one language"
    ];
    // redirect the browser back to the form
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION["form-data"] =  $_POST;
    $_SESSION["form-errors"] = $errors;
    redirect("form.php");
}
?>