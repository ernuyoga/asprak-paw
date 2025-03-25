<?php
// Introduction to PHP - Variables

$name = "John Doe";  	// String
$age = 30;          	// Integer
$price = 19.99;      	// Float (or double)
$is_student = true; 	// Boolean

echo $name;        		// Output: John Doe
echo "Hello, " . $name . "! You are " . $age . " years old."; // Concatenation
$total_price = $price * 2;
echo $total_price; 		// Output: 39.98

$age = 31; 		        // Now $age holds a different value.
echo $age;   		    // Output: 31

$my_variable = 10;      		                // Integer
echo gettype($my_variable) . "<br>"; 	// Output: integer

$my_variable = "Hello";  		                // Now a string
echo gettype($my_variable) . "<br>"; 	// Output: string

$my_variable = 3.14;    		                // Now a double (float)
echo gettype($my_variable) . "<br>"; 	// Output: double

// Global variable
$global_variable = "I'm a global variable.";

function myFunction() {
    // Local variable
    $local_variable = "I'm a local variable.";

    // Accessing the global variable INSIDE the function (using the 'global' keyword)
    global $global_variable;  // Important: You must declare the global variable inside the function

    echo "Inside myFunction():<br>";
    echo "Local variable: " . $local_variable . "<br>";
    echo "Global variable: " . $global_variable . "<br>";

    // Modifying the global variable inside the function
    $global_variable = "Global variable modified inside the function.";  // This changes the global variable
    echo "Global variable (after modification): " . $global_variable . "<br>";

}

myFunction();

echo "<br>Outside myFunction():<br>";
//echo "Local variable: " . $local_variable . "<br>"; // This will cause an error because $local_variable is out of scope
echo "Global variable: " . $global_variable . "<br>";  // The global variable's value has been changed by the function


// Another example demonstrating how to properly modify a global variable:

$another_global = 10;

function modifyGlobal() {
    global $another_global; // Declare the global variable

    $another_global = $another_global + 5; // Now you can modify it correctly
}

modifyGlobal();
echo "<br>Another Global: " . $another_global . "<br>"; // Output: 15


// Example of a function that creates a global variable (less common and generally not recommended):

function createGlobal() {
    $GLOBALS['new_global'] = "A new global variable created by the function.";
}

createGlobal();

echo $GLOBALS['new_global'] . "<br>"; // Accessing the global variable created by the function.

// Introduction to PHP - Functions

function addNumbers($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}

$result = addNumbers(5, 3);
echo "The sum is: " . $result . "<br>"; // Output: The sum is: 8

$anotherResult = addNumbers(10, 20);
echo "Another sum is: " . $anotherResult . "<br>"; // Output: Another sum is: 30

// Example with no parameters and no return value
function greet() {
    echo "Hello there!<br>";
}

greet(); // Output: Hello there!

// Example with default parameter value
function greetPerson($name = "Guest") {
    echo "Hello, " . $name . "!<br>";
}

greetPerson();                // Output: Hello, Guest!
greetPerson("Alice");   // Output: Hello, Alice!

// Introduction to PHP - Class & Object

class Car {
    // Properties
    public $color;
    public $model;
    public $speed;

    // Methods
    public function __construct($color, $model) { // Constructor
        $this->color = $color;
        $this->model = $model;
        $this->speed = 0;
    }

    public function accelerate($increment) {
        $this->speed += $increment;
    }

    public function brake($decrement) {
        $this->speed -= $decrement;
        if ($this->speed < 0) {
            $this->speed = 0; // Don't go below 0 speed
        }
    }

    public function getSpeed() {
        return $this->speed;
    }
}

$myCar = new Car("red", "Toyota");      // Creates a new Car object
$anotherCar = new Car("blue", "Honda"); // Creates another Car object

echo $myCar->color; // Accessing the color property (Output: red)
$myCar->accelerate(20);
echo $myCar->getSpeed(); // Output: 20
$myCar->brake(10);
echo $myCar->getSpeed(); // Output: 10
echo $anotherCar->color; // Accessing the color property of a different object (Output: blue)

class Car2 {
    private $speed = 0; // Private property

    public function accelerate($increment) {
        $this->speed += $increment;
    }

    public function getSpeed() { // Public method to access the private property
        return $this->speed;
    }
}

$myCar = new Car2();
$myCar->accelerate(50);
echo $myCar->getSpeed();    // Output: 50
//echo $myCar->speed;       // Error: Cannot access private property

class Vehicle {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function start() { echo "Engine started.<br>"; }
}

class Car3 extends Vehicle {
    public $doors;

    public function __construct($make, $model, $doors) {
        parent::__construct($make, $model);
        $this->doors = $doors;
    }

    public function start() { echo "Car started (Vroom!).<br>"; } // Override
}

$myCar = new Car3("Toyota", "Camry", 4);
$myCar->start();    // Output: Car started (Vroom!).
echo $myCar->make;  // Output: Toyota
?>