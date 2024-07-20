<?php
include 'header.php';
include 'functions.php';

// Sample array
$numbers = [1, 2, 3, 4, 5];

echo "<h1>Welcome to the Homepage</h1>";

// Echoing different kinds of HTML
echo "<p>This is a paragraph on the homepage.</p>";

// Decisions - if/else statements
if (date('H') < 12) {
    echo "<p>Good Morning!</p>";
} else {
    echo "<p>Good Afternoon!</p>";
}

// Repetition - foreach
echo "<h2>Numbers:</h2>";
echo "<ul>";
foreach ($numbers as $number) {
    echo "<li>$number</li>";
}
echo "</ul>";

// Calling a function
$result = addNumbers(10, 20);
echo "<p>The sum of 10 and 20 is: $result</p>";

include 'footer.php';
?>
