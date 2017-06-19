<?php
$name = "Sachin";
$age = 20;
if (strtolower($name) === "sachin") {
	if ($age >= 21)
		echo "You're over 21 !\n";
	else {
		echo "Nope, sorry !!\n";
	}
} else {
	echo "You're not <b>Sachin</b>,<br> Bye bye";
}
?>