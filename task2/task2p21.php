<?php
$number = 121;
$reverse = strrev($number);

if ($number == $reverse) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}
?>