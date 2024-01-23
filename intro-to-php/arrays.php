<?php
//------------------------------------------------------------------------------
// arrays - map an index (or key) onto a value
//------------------------------------------------------------------------------
$team = ['Bill', 'Mary', 'Mike', 'Chris', 'Anne'];
echo "<ul>";
for ($i = 0; $i < count($team); $i++) {
    echo "<li>Player $i: $team[$i]</li>";
}
echo "</ul>";

$book = [
    "title" => "Lord of the Flies",
    "author" => "William Golding",
    "year" => 1954
];

$text = 
    "{$book['title']} was written by {$book['author']}" .
    " and published in {$book['year']}.";

print("<p>$text</p>");

//------------------------------------------------------------------------------
// foreach statement - useful for iterating through an array
//------------------------------------------------------------------------------
$famous_books = [
    "Steinbeck" => "East of Eden",
    "Kafka" => "The Metamorphosis",
    "Beckett" => "Waiting for Godot",
    "Dickens" => "A Christmas Carol"
];

echo "<ul>";
foreach ($famous_books as $author => $title) {
    echo "<li>$author wrote $title</li>";
}
echo "</ul>";

//------------------------------------------------------------------------------
// nested (or multidimensional) arrays
//------------------------------------------------------------------------------
$products = [
    'paper' => [
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"
    ],
    'pens' => [
        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers",
    ],
    'misc' => [
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips",
    ]
];
echo "<p>Our most expensive product is {$products['paper']['photo']}.</p>";

foreach ($products as $section => $items) {
    echo "<p>" . ucfirst($section) . " products:</p>";
    echo "<ul>";
    foreach ($items as $key => $value) {
        echo "<li>$key\t($value)</li>";
    }
    echo "</ul>";
}
?>