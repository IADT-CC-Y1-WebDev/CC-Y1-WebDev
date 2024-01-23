<?php
//-----------------------------------------------------------------------------
// call a predefined function
//-----------------------------------------------------------------------------
echo "<p>The square root of 16 is ". sqrt(16) . "</p>";

//-----------------------------------------------------------------------------
// define a new function and call it
//-----------------------------------------------------------------------------
function hello() {
    echo "<p>Hello world!</p>";
}

hello();

//-----------------------------------------------------------------------------
// define a new function with a formal parameter and call it with an argument
//-----------------------------------------------------------------------------
function goodbye($name) {
    echo "<p>Goodbye $name!</p>";
}

goodbye("Jim");
goodbye("Sam");
goodbye("Jane");

//-----------------------------------------------------------------------------
// define a new function with default parameter values
//-----------------------------------------------------------------------------
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

happy_birthday("Jim", "fr");
happy_birthday("Sam", "ga");
happy_birthday("Jane");
happy_birthday("Dara", "??");

//-----------------------------------------------------------------------------
// define a function that returns a value
//-----------------------------------------------------------------------------
function format($author, $title, $year) {
    return "<p>$author wrote $title. It was published in $year.</p>";
}

echo format("Steinbeck", "East of Eden", 1952);
echo format("Kafka", "Metamorphosis", 1954);
echo format("Beckett", "Waiting for Godot", 1954);
echo format("Dickens", "A Christmas Carol", 1843);


//-----------------------------------------------------------------------------
// define a function that returns multiple values
//-----------------------------------------------------------------------------
function calculate($number1, $number2) {
    $add = $number1 + $number2;
    $subtract = $number1 - $number2;
    $multiply = $number1 * $number2;

    return [$add, $subtract, $multiply];
}

$first = 8;
$second = 5;
[$sum, $difference, $product] = calculate($first, $second);

echo "<p>The sum of $first and $second is $sum.</p>";
echo "<p>The difference of $first and $second is $difference.</p>";
echo "<p>The product of $first and $second is $product.</p>";

?>

