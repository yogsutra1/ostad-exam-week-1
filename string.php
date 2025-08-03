<?php
$strings = ["Hello", "World", "PHP", "Programming"];


echo "<h3>List of Strings</h3>";


foreach ($strings as $string):
    echo "• " . $string . "<br>";
endforeach;
echo "<h3>Vowel Count</h3>";

foreach ($strings as $string) {
    $count = 0;
    $letters = str_split(strtolower($string)); // শব্দটিকে ছোট হাতের অক্ষরে পরিণত করে আলাদা করা

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

//foreach ($strings as $string) {
// স্বরবর্ণ গণনা
// $vowelCount = preg_match_all('/[aeiou]/i', $string);

// স্ট্রিং উল্টানো
// $reversedString = strrev($string);

// ফলাফল প্রদর্শন
// echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n\n";
//}
