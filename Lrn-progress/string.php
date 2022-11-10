<?php
// strlen() - Return the Length of a String

$a = "That is not a Good Player.";
echo strlen($a).($a);

// str_word_count() - Count Words in a String 

// That will count the words 

// like this 
 
echo  str_word_count($a);

// strrev() - Reverse a String .
// It Reverse the Words 
echo strrev($a);

// str_replace() - Replace Text Within a String 
// It will replace the word to each other Word
echo str_replace("bad","good" ,($a));