<?php
$widgets = rand(0, 20);
echo "<p>We have $widgets widgets in stock.</p>";
//------------------------------------------------------------------------------
// if statement
//------------------------------------------------------------------------------
if ($widgets > 10) {
    echo "<p>We have plenty of widgets in stock.</p>";
}
else if ($widgets > 5 and $widgets <= 10) {
    echo "<p>We are running low on widgets, time to order some more.</p>";
}
else if ($widgets <= 5) {
    echo "<p>We are nearly out of widgets, ORDER MORE NOW!!.</p>";
}
//------------------------------------------------------------------------------
// while statement
//------------------------------------------------------------------------------
while ($widgets > 0) {
    echo "<p>Selling a widget...";
    $widgets = $widgets - 1;
    echo "...done. There are $widgets left in stock</p>";
}
echo "<p>We are right out of widgets!!</p>";
//------------------------------------------------------------------------------
// for statement
//------------------------------------------------------------------------------
for ($i = 0; $i < 4; $i++) {
    $widgets = $widgets + 10;
    echo "<p>We have received a delivery of 10 widgets.</p>";
}
echo "<p>We have $widgets widgets in stock.</p>";
?>