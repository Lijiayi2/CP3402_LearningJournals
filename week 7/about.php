<?php
include 'header.php';
include 'functions.php';

echo "<h1>About Us</h1>";
echo "<p>This is the about page.</p>";

// Repetition - for loop
echo "<h2>Counting to 5:</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "<p>Number: $i</p>";
}

// Repetition - while loop
echo "<h2>Counting to 5 using while loop:</h2>";
$i = 1;
while ($i <= 5) {
    echo "<p>Number: $i</p>";
    $i++;
}

include 'footer.php';
?>
