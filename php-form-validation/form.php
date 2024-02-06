<?php
require_once "./etc/global.php";

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
                <input type="text" name="name" value="<?= old("name") ?>">
                <span class="error"><?= error("name") ?><span>
            </p>
            <p>
                Age: 
                <input type="text" name="age" value="<?= old("age") ?>">
                <span class="error"><?= error("age") ?><span>
            </p>
            <p>
                Category:
                <select name="category">
                    <option value="">Please choose a category...</option>"
                    <option value="Sport"  <?= chosen("category", "Sport")  ? "selected" : "" ?>>Sport</option>
                    <option value="Music"  <?= chosen("category", "Music")  ? "selected" : "" ?>>Music</option>
                    <option value="Movies" <?= chosen("category", "Movies") ? "selected" : "" ?>>Movies</option>
                </select>
                <span class="error"><?= error("category") ?><span>
            </p>
            <p>
                Experience:
                <input type="radio" name="experience" value="Novice"    <?= chosen("experience", "Novice")    ? "checked" : "" ?>>Novice
                <input type="radio" name="experience" value="Competent" <?= chosen("experience", "Competent") ? "checked" : "" ?>>Competent
                <input type="radio" name="experience" value="Expert"    <?= chosen("experience", "Expert")    ? "checked" : "" ?>>Expert
                <span class="error"><?= error("experience") ?><span>
            </p>
            <p>
                Languages:
                <input type="checkbox" name="languages[]" value="English" <?= chosen("languages", "English") ? "checked" : "" ?>>English
                <input type="checkbox" name="languages[]" value="Irish"   <?= chosen("languages", "Irish")   ? "checked" : "" ?>>Irish
                <input type="checkbox" name="languages[]" value="Spanish" <?= chosen("languages", "Spanish") ? "checked" : "" ?>>Spanish
                <span class="error"><?= error("languages") ?><span>
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