<?php

$date = "unknown";     // This creates a global variable called $date

function local_format_date($timestamp) {
    $date = date("l F jS Y", $timestamp);   // This creates a local variable 
                                            // called $date and assigns it a
                                            // value. The global variable $date
                                            // is left unchanged.

    return $date;   // this refers to the local variable $date
}

$date = "unknown";     // This creates a global variable called $date

$now = time();
echo "<p>The returned date is " . local_format_date($now) . ".</p>";
echo "<p>The global date is " . $date . ".</p>";

function global_format_date($timestamp) {
    global $date;                           // This prevents a local variable
                                            // called $date being created. 
                                            // Instead $date will refer to the
                                            // global variable $date.

    $date = date("l F jS Y", $timestamp);   // This changes the value of the
                                            // global variable $date.

    return $date;   // this refers to the global variable $date
}

echo "<p>The returned date is " . global_format_date($now) . ".</p>";
echo "<p>The global date is " . $date . ".</p>";

?>

