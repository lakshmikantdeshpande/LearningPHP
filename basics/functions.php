<?php

// Normal function
function demo() {
	echo 'Hey, I\'m a demo function ;)<br>';
}

// Function with parameters
function add($a, $b) {
	echo 'The sum of '.$a.' and '.$b.' is '.($a + $b);
}

// Function returning a value
function subtract($a, $b) {
	return $a -$b;
}



demo();
add(7, 2);
echo '<br>The difference between 50 and 20 is ';
echo subtract(50, 20);
?>