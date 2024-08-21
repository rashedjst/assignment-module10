

<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
   
    $lowercaseString = strtolower($str);

    $stringReverse=strrev($str);
    
    $vowelCount = preg_match_all('/[aeiou]/', $lowercaseString);

    echo "Original String: ".$str.", Vowel Count: ".$vowelCount.", Reversed String: ".$stringReverse."<br><br>";

}
?>
