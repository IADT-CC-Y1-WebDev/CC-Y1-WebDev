<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
echo "<pre>";
if (array_key_exists("form-data", $_SESSION)) {
    print_r($_SESSION["form-data"]);
}
if (array_key_exists("form-errors", $_SESSION)) {
    print_r($_SESSION["form-errors"]);
}
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form</title>
        <style>
            .error { color: red; }
        </style>
    </head>
    <body>
        <h2>Profile Form</h2>
        <form action="process_form.php" method="POST">
            <p>
                Name: 
                <input type="text" name="name" value="">
                <span class="error"><span>
            </p>
            <p>
                Age: 
                <input type="text" name="age" value="">
                <span class="error"><span>
            </p>
            <p>
                Category:
                <select name="category">
                    <option value="">Please choose a category...</option>"
                    <option value="Sport">Sport</option>
                    <option value="Music">Music</option>
                    <option value="Movies">Movies</option>
                </select>
                <span class="error"><span>
            </p>
            <p>
                Experience:
                <input type="radio" name="experience" value="Novice">Novice
                <input type="radio" name="experience" value="Competent">Competent
                <input type="radio" name="experience" value="Expert">Expert
                <span class="error"><span>
            </p>
            <p>
                Languages:
                <input type="checkbox" name="languages[]" value="English">English
                <input type="checkbox" name="languages[]" value="Irish">Irish
                <input type="checkbox" name="languages[]" value="Spanish">Spanish
                <span class="error"><span>
            </p>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
<?php
if (array_key_exists("form-data", $_SESSION)) {
    unset($_SESSION["form-data"]);
}
if (array_key_exists("form-errors", $_SESSION)) {
    unset($_SESSION["form-errors"]);
}
?>