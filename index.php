<?php
echo 'Hello World';

echo "<br><br>"; // adding a break for clarity

$variable = 'I\'m a' . ' variable - string'; // variable as a string with a break quote.

echo $variable;

echo "<br><br>"; // adding a break for clarity


$number = 22;

$number = $number/2;

echo $number;

echo "<br><br>"; // adding a break for clarity

echo 'my variable is $number (in single quotes)'; // single quotes outputs exactly what's in the string.

echo "<br><br>"; // adding a break for clarity


echo "my variable is $number (in double quotes)"; // double quotes outputs the variable declared earlier.

echo "<br><br>"; // adding a break for clarity


$a = "number";

echo 'my variable is ' . $$a . ' using a ("variable variable")'; // called a "variable varible" which will take the name from the variable and call that variable.

echo "<br><br>"; // adding a break for clarity

// ARRAYS

$array = array('name', 'email', 'address'); // first way to declare an array using quotes and commas

echo $array; // will only output "array" you can't output what's in an array using echo

echo "<br><br>"; // adding a break for clarity

// instead use print_r (print recursive)
print_r($array);
echo "<br><p>The above line was echoed out/printed with the array with the array positions/key it used a print_r function</p>";

echo '<br>' . $array[2]; // will call the specified key in the square brackets

$array2[] = "salad"; // SECOND WAY TO DECLARE AN ARRAY IN A SEQUENCE. 
$array2[] = "bowl"; // THIS WILL APPEND THE ITEM TO THE END OF THE ARRAY.
print_r($array2); // PRINTS OUT THE ENTIRE ARRAY ABOVE W/KEYS.

$array3 = array( // THIRD WAY TO DECLARE AN ARRAY, BY DECLARING A KEY AND ASSIGNING A VALUE IN THE SAME LINE.
	'name' => 'Jon', // KEY: "name" = 'Jon' - string variable.
	'age' =>  37, // KEY: 'age' = 37 - number variable.
	'email' => 'email@email.com', // KEY: 'email' = 'email@email.com' - also a string variable.
);

echo "<br><br>";

print_r($array3);

echo '<br><br>' . $array3['name']; // CALLS THE ASSIGNED VALUE OF THE KEY

echo '<br><br>';

// IF, ELSE, SWITCH FUNCTIONS

$number1 = 2;

if ($number1!=1) { // IF WHATEVER IS IN THE ROUND BRACKETS IS TRUE, EXECUTE THE LINES IN THE CURLY BRACKETS.
	echo 'true';
} else { // IF THE IF STATEMENT IS NOT TRUE, EXECUTE THE FOLLOWING CODE
	echo 'false';
}

?>
