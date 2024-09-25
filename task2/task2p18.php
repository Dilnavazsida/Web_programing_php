<?php
$randomNumber = rand(1, 10);
$userGuess = 7; // Example guess
if ($userGuess == $randomNumber) {
    echo "Correct! The number was: " . $randomNumber;
} else {
    echo "Wrong! The number was: " . $randomNumber;
}
?>