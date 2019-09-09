<?php

# Create a script which will take a string and analyse it to produce the following stats:
/*
Number of characters
Number of words
Number of sentences
Number of paragraphs
Longest word
Average sentence length
 */

function numberOfChar($string) {
    $stringToArray = str_split($string, 1);
    print_r (count($stringToArray));
}
$string = 'outside';
numberOfChar($string);

echo "<br>";

function numberOfWords($word) {
    print_r(str_word_count($word));
}
$word = "three words words words";
numberOfWords($word);

echo "<br>";

function numberOfSentences($paragraph) {
    $paragraphToSentences = explode(".", $paragraph);
    print_r (count($paragraphToSentences) -1);
}
$paragraph = "this is paragraph. this is paragraph. this is paragraph. this is paragraph.";
numberOfSentences($paragraph);

echo "<br>";

function numberOfParagraphs($longParagraph) {
    $longParagraph = explode("\n", $longParagraph);
    print_r (count($longParagraph)-1);
}
$longParagraph = "this is very long paragraph. \n this is very long paragraph. \nthis is very long paragraph. \nthis is very long paragraph. \nthis is very long paragraph. \n";
numberOfParagraphs($longParagraph);

echo "<br>";

function countValues($key ,$value){
    return count($value);
}
$arrayOfWords = "what is the longest word in this sentence?";
print_r(array_map('countValues', $arrayOfWords));