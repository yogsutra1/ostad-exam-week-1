<?php
$strings = ["Hello", "World", "PHP", "Programming"];


echo "<h3>List of Strings</h3>";


foreach ($strings as $string):
    echo "• " . $string . "<br>";
endforeach;
echo "<h3>Vowel Count</h3>";

foreach ($strings as $string) {
    $count = 0;
    $letters = str_split(strtolower($string));

    foreach ($letters as $letter) {
        if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u') {
            $count++;
        }
    }

    echo "Word: $string, Vowel: $count<br>";
}

echo "<h3>Reversed Format</h3>";
echo "<ul>";

foreach ($strings as $string):
    $reversed = strrev($string);
    echo "<li>Original Word: $string → Reversed: $reversed</li>";
endforeach;

echo "</ul>";


?>
<?php
$strings = ["Hello", "World", "PHP", "Programming"];

echo "<h3>List of Strings</h3>";
foreach ($strings as $string):
    echo "• " . $string . "<br>";
endforeach;

echo "<h3>Vowel Count and Reversed Strings</h3>";
echo "<ul>";

foreach ($strings as $string) {

    $count = 0;
    $letters = str_split(strtolower($string));
    foreach ($letters as $letter) {
        if (in_array($letter, ['a', 'e', 'i', 'o', 'u'])) {
            $count++;
        }
    }

    $reversed = strrev($string);

    echo "<li>Original String: $string, Vowel Count: $count, Reversed String: $reversed</li>";
}

echo "</ul>";
?>