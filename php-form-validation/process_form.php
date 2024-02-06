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
    // redirect the browser back to the form
    redirect("form.php");
}
?>