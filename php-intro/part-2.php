<?php
// Introduction to PHP - Arrays

// 1. Indexed Arrays
$fruits = array("apple", "banana", "orange"); // Old way
$colors = ["red", "green", "blue"]; // Short array syntax (PHP 5.4+)

echo $fruits[0] . "<br>"; // Output: apple
echo $colors[2] . "<br>"; // Output: blue

$fruits[] = "grape"; // Adds "grape" to the end of the array
array_push($fruits, "kiwi", "mango"); // Adds multiple elements

$fruits[1] = "pear"; // Changes "banana" to "pear"

// Print the array in a readable format
echo "<pre>";
print_r($fruits);
echo "</pre>";

// 2. Associative Arrays
$person = array("name" => "John", "age" => 30, "city" => "New York"); // Old way
$student = ["name" => "Alice", "grade" => "A", "major" => "Computer Science"]; // Short array syntax

echo $person["name"] . "<br>"; // Output: John
echo $student["grade"] . "<br>"; // Output: A

// adding element
$person["email"] = "john.doe@example.com";

$person["age"] = 31; // Changes the age to 31

echo "<pre>";
print_r($person);
echo "</pre>";

// 3. Multidimensional Arrays
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$inventory = [
    ["product" => "Laptop", "quantity" => 10],
    ["product" => "Mouse", "quantity" => 20],
];

echo $matrix[0][1] . "<br>"; // Output: 2
echo $inventory[1]["product"] . "<br>"; // Output: Mouse
echo "<br>";

// Introduction to PHP - Loops

// a. for loop, bisa untuk indexed array
$fruits = ["apple", "banana", "orange"];
$count = count($fruits); // Good practice to get the count only once

echo $count . "<br>";
for ($i = 0; $i < $count; $i++) {
    echo $fruits[$i] . "<br>";
}
echo "<br>";

// Output:
// 3
// apple
// banana
// orange

// b. foreach loop, bisa untuk indexed array dan associative array
// indexed array
$fruits = ["apple", "banana", "orange"];

foreach ($fruits as $fruit) {  // $fruit will hold each value in turn
    echo $fruit . "<br>";
}
echo "<br>";

// Output:
// apple
// banana
// orange

// associative array
$person = ["name" => "Alice", "age" => 30, "city" => "New York"];

foreach ($person as $key => $value) { // $key will hold each key, $value each value
    echo $key . ": " . $value . "<br>";
}
echo "<br>";

// Output:
// name: Alice
// age: 30
// city: New York

// c. while loop (jarang digunakan), bisa untuk indexed array
$fruits = ["apple", "banana", "orange"];
$i = 0;
$count = count($fruits);

while ($i < $count) {
    echo $fruits[$i] . "<br>";
    $i++;
}
echo "<br>";

// Output:
// apple
// banana
// orange

// [addition] array_walk() function
$fruits = ["apple", "banana", "orange"];

function myFunction($value, $key) {
    echo $key . ": " . strtoupper($value) . "<br>"; // Convert to uppercase
}

array_walk($fruits, "myFunction");

// Output:
// 0: APPLE
// 1: BANANA
// 2: ORANGE
?>