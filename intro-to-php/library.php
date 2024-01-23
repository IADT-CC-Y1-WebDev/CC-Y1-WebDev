<?php

function hello() {
    echo "<p>Hello world!</p>";
}

function goodbye($name) {
    echo "<p>Goodbye $name!</p>";
}

function happy_birthday($name, $language="en") {
    if ($language === "en") {
        echo "<p>Happy birthday, $name!</p>";
    }
    else if ($language === "ga") {
        echo "<p>Lá breithe shona, $name!</p>";
    }
    else if ($language === "fr") {
        echo "<p>Joyeux anniversaire, $name!</p>";
    }
    else if ($language === "sp") {
        echo "<p>Feliz cumpleaños, $name!</p>";
    }
    else {
        echo "<p>Beatus natalis, $name!</p>";
    }
}

?>

