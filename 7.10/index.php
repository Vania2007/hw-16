<?php
require 'lib.php';

$str = "This is a sample text for demonstrating the function.";

$reversedString = reverseString($str);
echo "Reversed string: $reversedString\n\n";



$filteredText = removeEverySecondWord($str);
echo "Text without every second word: $filteredText\n\n"; 


$wordsArray = explode(' ', $str);
$initials = getInitialsFromArray($wordsArray);
echo "Initials from array: $initials\n\n"; 


$wordCount = countWords($str);
echo "Number of words in the text: $wordCount\n\n";

$textWithNoVowels = removeVowels($str);
echo "String without vowels: $textWithNoVowels\n\n";


$isPalin = isPalindrome($str) ? 'yes' : 'no';
echo "Is it a palindrome? $isPalin\n\n";


$upperCaseString = convertCase($str, true);
echo "String in uppercase: $upperCaseString\n\n";