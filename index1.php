<?php // ------------------ Lesson 1 : PHP Introduction

    $name = "Mawadda";
    $petName = "Blackie";
    $wifeName = "Sarah";
    echo "Hello, $name! Welcome to PHP. I know you miss $wifeName and $petName";
    echo "<br>"; // Add a line break
    echo nl2br("\n"); // Converts newline to HTML <br>
?>

<?php // ------------------ Lesson 2: Variables and Data Types

    // Strings
    $string1 = "Hello, World!";
    $string2 = 'PHP is fun.';
    echo $string1 . " " . $string2; // Joining with a space
    // Single-quoted strings do not interpret variables
    echo "<br>";

    // Integers
    $int1 = 10;
    $int2 = -5;
    echo $int1 + $int2;
    echo "<br>";

    // Floats
    $float1 = 3.14;
    $float2 = 2.5;
    echo $float1 * $float2;
    echo "<br>";

    // Arrays
    // Indexed Array: use numbered keys
    $fruits = ["Apple", "Banana", "Cherry"];
    echo $fruits[1];
    echo "<br>";
    $colors = array( 'red', 'blue', 'green' );
    print_r( $colors ); // to print out elements with their assciatiove indexes
    echo "<br>";
    echo $colors[2];
    echo "<br>";
    $colors[] = 'yellow'; // to add a new element to the end of array
    print_r( $colors );
    echo "<br>";

    // Associative Arrays: use strings as keys
    $person = ["name" => "Mawadda", "pet" => "Blackie"];
    echo $person["name"];
    echo "<br>";

    // Multi-Dimensial Arrays
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ]; // Mind the brakets and commas
    echo $matrix[2][2]; // 9
    echo "<br>";

    // Booleans
    // Used in conditional statements.
    //Automatically converts to 1 (true) or an empty string (false) when printed.
    $isPHPFun = true;
    $isJavaHrad = false;

    if ($isPHPFun) {
        echo "PHP is fun!";
    }
    echo "<br>";

    // Defining and Using Constants
    // Constants are global and can be accessed anywhere in the script.
    // Constant names are usually written in uppercase for readability.
    // We do not use $

    // Using define()
    define("PI", 3.14159);
    echo PI;
    echo "<br>";

    // Using const:
    const GREETING = "Welcome Home!";
    echo GREETING;
    echo "<br>";

    // Exercise
    $product = [
    ["name" => "Milk", "price" => 5],
    ["name" => "Water", "price" => 2]
    ];

    // to visaulize complicated arrays
    echo '<pre>';
    print_r( $product );
    echo '</pre>';

    // Calculate the price difference
    $priceDifference = $product[0]['price'] - $product[1]['price'];

    echo "The price difference between {$product[0]['name']} and {$product[1]['name']} is $priceDifference.";
    echo "<br>";
    echo "<br>";
?>

<?php
    // --------------- Lesson 3: Control Structures in PHP
    // 1- conditional statements: if, else, elseif, switch, match
    // 2-  loops: for, while, do-while, and foreach loops.

    // Key Points to Remember
        // .. if Statement: Checks a condition and executes code if the condition is true.
        // .. else Statement: Executes code if the if condition is false.
        // .. elseif Statement: Adds additional conditions to if statements.
        // .. switch Statement: A cleaner way to compare the same variable to different values.
        // .. for Loop: Use when the number of iterations is known.
        // .. while Loop: Use when the number of iterations is not known and depends on a condition.
        // .. do-while Loop: Similar to while loop but guarantees the code executes at least once.
        // .. foreach Loop: Best for iterating over arrays.

    // If, else, elseif Statements
    $temp = 25;

    if ($temp >= 30) {
        echo "it is time to swim";
    } elseif ($temp >= 23) {
        echo " it is time to do a picnik";
    } else {
        echo "it is time to do indoors activities";
    }

    echo "<br>";


    $isAdult = ($age >= 18);
    $isMember = ($membershipStatus == 'active');

    if ($isAdult && $isMember) {
        echo "Access granted.";
    } else {
        echo "Access denied.";
    }

    echo "<br>";

    //


    // Switich Statements
    // The switch statement compares $day with each case.
    // When a match is found ("Wednesday"), it executes the corresponding code and exits the switch using break.
    // If no cases match, the default code is executed.

    $day = "Wednesday";

    switch ($day) {
        case "Monday":
            echo "Today is Monday.";
            break;
        case "Tuesday":
            echo "Today is Tuesday.";
            break;
        case "Wednesday":
            echo "Today is Wednesday.";
            break;
        case "Thursday":
            echo "Today is Thursday.";
            break;
        case "Friday":
            echo "Today is Friday.";
            break;
        default:
            echo "It's the weekend!";
    }

    echo "<br>";


    // match Statements in PHP

    // Key Features of match:
        // .. Strict Comparison:
        // match uses strict comparison (===), unlike switch which uses loose comparison (==).

        // .. Expression Instead of Statement (return a value):
        // match is an expression, meaning it returns a value that can be assigned to a variable or used directly.

        // .. No break Required:
        // Each case in match executes only one branch, so there's no need for break to stop execution.

        // .. Default Case is Mandatory:
        // You must handle all possible cases, or include a default branch.

    // Syntax
    // $result = match (value) {
        // case1 => expression1,
        // case2 => expression2,
        // case3 => expression3,
        // default => default_expression,
    // };

    // Example 1: Basic match Expression

    $day = "Tuesday";

    $message = match ($day) {
        "Monday" => "Start of the work week.",
        "Tuesday" => "Second day of work.",
        "Friday" => "End of the work week.",
        default => "It's the weekend!",
    };

    echo $message;

    echo "<br>";

    // Example 2: Returning Values

    $grade = "B";

    $description = match ($grade) {
        "A" => "Excellent",
        "B" => "Good",
        "C" => "Average",
        "D" => "Below Average",
        "F" => "Fail",
        default => "Invalid Grade",
    };

    echo "Grade: $grade, Description: $description";

    echo "<br>";


    // Example 3: Using Multiple Cases for a Single Expression

    $number = 1;

    $parity = match ($number) {
        2, 4, 6, 8, 10 => "Even",
        1, 3, 5, 7, 9 => "Odd",
        default => "Unknown",
    };

    echo "The number $number is $parity.";

    echo "<br>";


    // Example 4: Match with Functions or Complex Expressions

    $operation = "multiply";
    $num1 = 5;
    $num2 = 3;

    $result = match ($operation) {
        "add" => $num1 + $num2,
        "subtract" => $num1 - $num2,
        "multiply" => $num1 * $num2,
        "divide" => $num2 != 0 ? $num1 / $num2 : "Division by zero",
        default => "Invalid operation",
    };

    echo "Result: $result";

    echo "<br>";

    // For Loop
    // for (initialization; condition; increment/decrement) {
        // Code to be executed
    // }

    for ( $i = 1; $i < 5; $i++) {
        echo "The number is: $i <br>";
    }

    echo "<br>";

    // Calculating the Sum of Numbers with for Loop
    $sum = 0;

    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }

    echo "The sum of numbers from 1 to 100 is: $sum";
    echo "<br>";


    // while Loop
    //The while loop executes a block of code as long as a specified condition is true.
    // while (condition) {
        // Code to be executed
    // }

    $i = 5;

    while ($i < 10) {
        echo "The number is: $i<br>";
        $i++;
    }

    echo "<br>";

    // Printing Even Numbers with while Loop
    $i = 2;

    while ($i <= 20) {
        echo "$i<br>";
        $i += 2;
    }

    echo "<br>";
    // do-while Loop
    // The do-while loop will always execute the code block once, then it will check the condition,
    // and repeat the loop as long as the condition is true.

    $i = 10;

    do {
        echo "The number is: $i<br>";
        $i++;
    } while ($i < 10);

    // The code inside do { } executes once, even though $i is not less than 10.
    // After executing, it checks the condition $i < 5, which is false, so the loop ends.

    $attempts = 0;
    $maxAttempts = 3;
    $correctPassword = "secret";

    do {
        // Simulate user input (in real cases, you'd get this from a form)
        $userInput = "guess"; // Replace with actual input
        $attempts++;

        if ($userInput == $correctPassword) {
            echo "Access granted.";
            break;
        } else {
            echo "Access denied. Attempt $attempts of $maxAttempts.<br>";
        }
    } while ($attempts < $maxAttempts);

    if ($attempts == $maxAttempts) {
        echo "Maximum attempts reached. Try again later.";
    }

    echo "<br>";

    // foreach Loop
    // The foreach loop is used to loop through arrays.
    // It makes it easy to iterate over each element in an array.

    // Syntax for iteration through an indexed array
    // foreach ($array as $value) {
        // Code to execute
    // }

    $fruits = ["Apple", "Banana", "Cherry"];

    foreach ($fruits as $fruit) {
        echo "I like $fruit.<br>";
    }

    echo "<br>";

    // Syntax for iteration through an assosiative array
    // foreach ($array as $key => $value) {
        // Code to execute
    // }

    $person = ["Name" => "John", "Age" => 30, "City" => "New York"];

    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }

    echo "<br>";

    //  Iterating Over a Multidimensional Array with foreach

    $products = [
        ["Name" => "Laptop", "Price" => 1000],
        ["Name" => "Tablet", "Price" => 500],
        ["Name" => "Smartphone", "Price" => 300]
    ];

    foreach ($products as $product) {
        foreach ($product as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "<br>";
    }

        echo "<br>";



?>

<?php
// ------------- Manipulating Arrays

// Create arrays
$names1 = ["Alice", "Bob", "Charlie"];
$details1 = [
    ["Name" => "Alice", "Age" => 25],
    ["Name" => "Bob", "Age" => 30],
    ["Name" => "Charlie", "Age" => 35],
];

// Add and remove elements
array_push($names1, "Diana");
unset($names1[1]); // Remove "Bob"

// Loop through indexed array
foreach ($names1 as $name) {
    echo $name . "<br>";
}

// Loop through multi-dimensional array
foreach ($details1 as $person) {
    echo $person["Name"] . " is " . $person["Age"] . " years old.<br>";
}

// Multi-dimensional array update
$details1[0]["Age"] = 26;

echo '<pre>';
print_r($details1);
echo '</pre>';

?>

<?php   // Manipulating Arrays with built-in functions

// Indexed array
$fruits2 = ["Apple", "Banana", "Cherry"];

// Associative array
$prices2 = [
    "Apple" => 2.5,
    "Banana" => 1.0,
    "Cherry" => 3.0,
];

// Multi-dimensional array
$matrix2 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

// Adding elements
$fruits2[] = "Orange"; // Add to the end
array_unshift($fruits2, "Pineapple"); // Add to the beginning

// Removing elements
array_pop($fruits2); // Removes last element
array_shift($fruits2); // Removes first element

// Updating elements
$fruits2[1] = "Mango"; // Change "Banana" to "Mango"

// Merging arrays
$newFruits2 = ["Grape", "Peach"];
$merged = array_merge($fruits2, $newFruits2);

// Sorting arrays
sort($fruits2); // Sort indexed array in ascending order
ksort($prices2); // Sort associative array by keys

echo '<pre>';
print_r($fruits2);
echo '</pre>';

echo '<pre>';
print_r($prices2);
echo '</pre>';

echo '<pre>';
print_r($merged);
echo '</pre>';

echo "<br>";

// Looping Through Arrays using foreach
foreach ($fruits2 as $fruit) {
    echo $fruit . "<br>";
}

echo "<br>";

// Associative array
foreach ($prices2 as $item => $price) {
    echo "$item costs $price<br>";
}

echo "<br>";

?>



<?php
    // Challenge: Print every number in the Fiobanacci Sequence without going over 200.

    $current = 1;
    $previous = 0;
    $next = null;
    $limit = 200;
    $sequence = '';

    while ($current < $limit ) {
        $sequence .= $current . ', ';
        $next = $current + $previous;
        $previous = $current;
        $current = $next;
    }

    $sequence = trim( $sequence);
    $sequence = substr( $sequence, 0, strlen( $sequence) - 1 );

    echo $sequence;

    echo "<br>";

?>

<?php
    // ................ Lseeon 4 : PHP Functions

    // Default Parameters
    // You can assign default values to parameters.
    // If the caller does not provide a value, the default value is used.

    function greet($name = "Guest") {
        echo "Hello, $name!<br>";
    }

    greet();         // Outputs: Hello, Guest!
    greet("Alice");  // Outputs: Hello, Alice!

    echo "<br>";

    // Anonymous Functions in PHP
        // Anonymous functions, also known as closures or lambda functions, are functions without a name.
        // They are often used as arguments for other functions or assigned to variables
        // Syntax:
        // $variable = function (parameters) {
            // Code to execute
        // };

    $greet = function ($name) {
        return "Hello, $name!";
    };

    echo $greet("Alice");

    echo "<br>";

    // a- Using Anonymous Functions with Built-in Functions
    // Anonymous functions are often used as arguments to functions like array_map, array_filter, and array_reduce.

    // Example with array_map:
    $numbers = [1, 2, 3, 4];

    $squared = array_map(function ($num) {
        return $num * $num;
    }, $numbers); // The callback function is the first argument.
                  // The array(s) to be processed ($numbers) are passed as subsequent arguments.

    print_r($squared);

    echo "<br>";

    // Example with array_filter:
    $numbers1 = [1, 2, 3, 4, 5];

    $evenNumbers = array_filter($numbers1, function ($num) {
        // The first argument is the array to filter.
        // The second argument is the callback function.
        return $num % 2 === 0;
    });

    print_r($evenNumbers);

    echo "<br>";

    // Example with array_reduce:
        // General Use Cases of array_reduce():
            // 1. Summing up values in an array.
            // 2. Concatenating strings.
            // 3. Calculating the product of all elements.

    $numbers2 = [1, 2, 3, 4];

    $sum = array_reduce($numbers2, function ($carry, $num) {
        return $carry + $num;
    }, 0);
    // The carry variable ($carry) accumulates the result as the function processes each element of the array.
    // The initial value (0 in this case) is the starting point for the accumulation.
    // If omitted, the first element of the array is used as the initial value.

    echo $sum;

    echo "<br>";

    // b- Closures with use Keyword
    // Anonymous functions can capture variables from the surrounding scope using the use keyword.

    $multiplier = 2;

    $double = function ($num) use ($multiplier) {
        return $num * $multiplier;
    };

    echo $double(5);

    echo "<br>";


    // c- Anonymous Functions as Callback Functions
    // Anonymous functions are commonly used as callbacks in functions that require one.

    function applyCallback($arr, $callback) {
        foreach ($arr as $value) {
            echo $callback($value) . "<br>";
        }
    }

    $numbers = [1, 2, 3, 4];

    applyCallback($numbers, function ($num) {
        return $num * $num;
    });

    echo "<br>";

    // d- Returning Anonymous Functions
    //Anonymous functions can be returned from other functions to create higher-order functions.

    function multiplier($factor) {
        return function ($num) use ($factor) {
            return $num * $factor;
        };
    }

    $double = multiplier(2);
    echo $double(5); // Outputs: 10

    echo "<br>";

    $triple = multiplier(3);
    echo $triple(5); // Outputs: 15


    echo "<br>";


    // e-  Arrow Functions
    // .. Arrow functions are a concise syntax for anonymous functions.
    // .. They use the fn keyword and automatically inherit variables from the parent scope.

    // Syntax
    //fn (parameters) => expression;

    // Differences Between Arrow Functions and Anonymous Functions:
        // 1. Arrow functions automatically capture variables from the parent scope, so you don't need the use keyword.
        // 2. Arrow functions are limited to single expressions.

    $multiplier = 2;

    $double = fn($num) => $num * $multiplier;

    echo $double(5); // Outputs: 10

    echo "<br>";


    // f- Sorting with Anonymous Functions
    $people = [
        ["name" => "Alice", "age" => 30],
        ["name" => "Bob", "age" => 25],
        ["name" => "Charlie", "age" => 35],
    ];

    usort($people, function ($a, $b) {
        return $a['age'] <=> $b['age'];
    });

    print_r($people);

    echo "<br>";


    // g- Dynamic String Formatter

    function createFormatter($prefix, $suffix) {
        return function ($text) use ($prefix, $suffix) {
            return $prefix . $text . $suffix;
        };
    }

    $quoteFormatter = createFormatter('"', '"');
    echo $quoteFormatter("Hello, World!"); // Outputs: "Hello, World!"

    echo "<br>";


    // ... Variable Scope
        // a. Local Variables
        // Variables declared inside a function are local and cannot be accessed outside the function.

    function test() {
        $localVar = "I am local!";
        echo $localVar;
    }

    test(); // Outputs: I am local!
    // echo $localVar; // Error: Undefined variable
    echo "<br>";



        // b. Global Variables
        // Variables declared outside functions are global and cannot be directly accessed inside functions
        // unless explicitly declared global.

    $globalVar = "I am global!";

    function test1() {
        global $globalVar; // Declaring the variable as global
        echo $globalVar;
    }

    test1(); // Outputs: I am global!

    echo "<br>";

        // c. Static Variables
        // A static variable retains its value between function calls.

function counter() {
    static $count = 0; // Declared as static
    $count++;
    echo $count . "<br>";
}

counter(); // Outputs: 1
counter(); // Outputs: 2
counter(); // Outputs: 3

echo "<br>";

        // d. Superglobals
        // PHP provides several built-in superglobal variables like $_GET, $_POST, $_SESSION, and $_COOKIE.
        // These are accessible anywhere in the script.

$name = "Alice";
function showName() {
    echo $GLOBALS['name']; // Access global variable using $GLOBALS
}

showName(); // Outputs: Alice

echo "<br>";

?>

<?php // ...................Lesson 4: Objects and Classes in PHP

    // 1. Defining and Using a Class
class Car {
    public $brand;
    public $color;

    public function drive() {
        echo "The car is driving.";
    }
}

echo "<br>";


    // 2. Creating an Object
    // Use the new keyword to create an instance (object) of a class.

$myCar = new Car(); // Create an object of the Car class
$myCar->brand = "Toyota"; // Assign a value to the property
$myCar->color = "Red"; // Assign a value to another property

echo "Brand: " . $myCar->brand . "<br>";
echo "Color: " . $myCar->color . "<br>";
$myCar->drive(); // Call the method

echo "<br>";

    // 3. Properties and Methods
    // Properties
        // Properties are variables that belong to a class.
        // They hold data for the object.
        // we use the arrow operator -> when assigning and setting

class Car2 {
    public $brand; // Defining properties
    public $color;
}

$myCar->brand; // Assigning properties


echo $myCar->get_brand; // geting the value of the property


    // Methods
        // Methods are functions defined within a class.
        // They represent actions or behaviors of the object.

class Car {
   public function drive() {  // Defining Methods
        echo "The car is driving.";
   }
}

$myCar->drive(); // Calling Methods


// 4. Access Modifiers
// Access modifiers define the visibility of properties and methods.

// PHP supports three access modifiers:
    // 1. public: Can be accessed from anywhere.
    // 2. protected: Can only be accessed within the class and its child classes.
    // 3. private: Can only be accessed within the class.

class Car {
    public $brand; // Accessible from anywhere
    protected $color; // Accessible only within the class or subclasses
    private $engine; // Accessible only within the class

    public function setColor($color) {
        $this->color = $color; // Allowed because it's within the class
    }

    private function startEngine() {
        echo "Engine started.";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota"; // Allowed
// $myCar->color = "Red"; // Error: Cannot access protected property
// $myCar->engine = "V8"; // Error: Cannot access private property


// 5. Constructors and Destructors

// Constructors
// A constructor is a special method that is automatically called when an object is created.
// It is typically used to initialize properties.

class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function displayInfo() {
        echo "Brand: $this->brand, Color: $this->color";
    }
}

$myCar = new Car("Toyota", "Red");
$myCar->displayInfo();

    // the updated PHP 8.0

    class Car {
    public function __construct(
        // The brand and color properties are declared and initialized directly
        // in the constructor parameters using the public visibility modifier.
        // The string type is declared for both brand and color to ensure type safety.
        public string $brand, // mind ,
        public string $color
    ) {} // mind {}

    // Adding Defaults and Error Prevention
    /*
    public function __construct(
        public string $brand = "Unknown",  // Default value for brand
        public string $color = "Unpainted" // Default value for color
    ) {}
    */
    public function drive(): void {
        // The void return type specifies that this method does not return any value.
        // Instead, it directly prints a message using echo.
        echo "The $this->color $this->brand is driving.";
    }

    public function displayInfo(): void {
        echo "Brand: $this->brand, Color: $this->color";
    }
}

/*
$defaultCar = new Car(); // Uses default values
echo $defaultCar->displayInfo() . "<br>"; // Outputs: Brand: Unknown, Color: Unpainted
*/

$myCar = new Car("Toyota", "Red"); // Directly pass values to the constructor
echo $myCar->displayInfo() . "<br>"; // Outputs: Brand: Toyota, Color: Red
$myCar->drive(); // Outputs: The Red Toyota is driving.

//---------------------------------

// Updated Code: Leveraging Union Types and Read-Only Properties
class Car {
    public function __construct(
        public readonly string $brand,       // Read-only property
        public readonly string $color,       // Read-only property
        public readonly int|string $year     // Union type for flexibility
    ) {}

    public function displayInfo(): void {
        echo "Brand: $this->brand, Color: $this->color, Year: $this->year";
    }
}

$myCar = new Car("Toyota", "Red", 2023); // Use integer for year
$classicCar = new Car("Ford", "Blue", "1967"); // Use string for year

$myCar->displayInfo();    // Outputs: Brand: Toyota, Color: Red, Year: 2023
echo "<br>";
$classicCar->displayInfo(); // Outputs: Brand: Ford, Color: Blue, Year: 1967
echo "<br>";


// Destructors
// A destructor is a special method called when an object is destroyed or the script ends.
// It is typically used to free resources or perform cleanup tasks.

class Car {
    public function __destruct() {
        echo "The object is destroyed.";
    }
}

$myCar = new Car();
// When the script ends, the destructor will automatically be called
unset($myCar); // Explicitly destroy the object

// 6. Inheritance
// Inheritance allows a class to inherit properties and methods from another class.

    // Parent Class: The class being inherited from.
    // Child Class: The class that inherits.

class Vehicle {
    public string $brand; // add type declaration (string)

    public function start(): void {
        echo "The vehicle has started.";
    }
}

class Car extends Vehicle {
    public string $color;

    public function honk(): void {
        echo "The car is honking.";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Red";

echo $myCar->brand . "<br>"; // Inherited property
$myCar->start(); // Inherited method
$myCar->honk(); // Method from the Car class

echo "<br>";


// 7. Polymorphism
// Polymorphism allows methods to have different behaviors based on the object calling them.
// It is commonly achieved using method overriding.

class Animal {
    public function speak(): void {
        echo "The animal makes a sound.";
    }
}

class Dog extends Animal {
    public function speak(): void {
        echo "The dog barks.";
    }
}

$animal = new Animal();
$dog = new Dog();

$animal->speak(); // Outputs: The animal makes a sound.
$dog->speak();    // Outputs: The dog barks.

echo "<br>";

// 8. Interfaces
// Interfaces define a contract for classes.
// A class that implements an interface must define all its methods.

// Key Characteristics of Interfaces
    // 1. Declares method signatures only (no method bodies).
    // 2. A class can implement multiple interfaces (supports multiple inheritance).
    // 3. All methods in an interface are public by default.
    // 4. Cannot contain properties (only constants are allowed).

// When to Use an Interface
    // 1. When you want to define a strict contract that multiple classes must adhere to.
    // 2. When multiple inheritance is required (a class can implement multiple interfaces).
    // 3. Example: Define a Loggable interface for any class that needs logging functionality.

interface Shape {
    public function calculateArea(): float; // add return type (float)
}

class Rectangle implements Shape { // Declares method signatures only (no method bodies).
    public function __construct(
        public float $length, // Constructor property promotion
        public float $width
    ) {}


    public function calculateArea(): float {
        return $this->length * $this->width;
    }
}

$rectangle = new Rectangle(10, 5);
echo "Area: " . $rectangle->calculateArea();

    // Interface Constants
    // Interfaces can have constants, which must be defined without const.

interface Role {
    const ADMIN = 'Administrator';
    const USER = 'Regular User';
}

class User implements Role {
    public function getRole($type) {
        return $type === 'admin' ? self::ADMIN : self::USER;
    }
}

$user = new User();
echo $user->getRole('admin'); // Outputs: Administrator


// 9. Abstract Classes
// Abstract classes cannot be instantiated
// and are used to define a base class with methods that must be implemented by child classes.

// When to Use an Abstract Class
    // 1. When you need to provide a base class with shared functionality for multiple derived classes.
    // 2. When you need to define properties or methods that child classes can inherit.
    // 3. Example: Create an abstract Vehicle class with properties like speed and color, and methods like startEngine().

abstract class Animal {
    abstract public function makeSound(): void;

    public function eat(): void {
        echo "This animal is eating.";
    }
}

class Dog extends Animal {
    public function makeSound(): void {
        echo "The dog barks.";
    }
}

$dog = new Dog();
$dog->makeSound();
echo "<br>";
$dog->eat();
echo "<br>";


// 10. Magic Methods
    // PHP provides several "magic" methods that have special behavior.

// __construct(): Called when an object is created.
// __destruct(): Called when an object is destroyed.
// __get(): Called when accessing an inaccessible property.
// __set(): Called when setting an inaccessible property.

class Person {
    private array $data = [];

    public function __get(string $key): mixed {
        return $this->data[$key] ?? null;
            // It checks if the key exists in the $data array.
            // If it exists, it returns the value stored at $data[$key].
            // If it doesn't exist, it returns null
    }

    public function __set(string $key, mixed $value): void {
        $this->data[$key] = $value;
            // It adds the $key as a key in the $data array and assigns $value to it.
    }
}

$person = new Person();
$person->name = "Alice"; // Calls __set()
$person->age = 25;
echo $person->name;      // Calls __get()
echo "<br>";
echo $person->age;

echo "<br>";

// Another Code with naming arguments

/*
class Person {
    public function __construct(
        public string $name,
        public int $age
    ) {}
}

$person = new Person("Alice", 25);
echo $person->name; // Outputs: Alice
echo $person->age;  // Outputs: 25
*/


// Nullsafe Operator ?->
    // Without ?->, attempting to call a method or access a property on null would result in a fatal error.
    // With ?->, PHP safely handles the null case and returns null instead.
class Person {
    private ?string $name; // The $name property can be either a string or null.
                           // The ? before string makes the type nullable

    public function __construct(?string $name = null) {
        // The constructor accepts a nullable string parameter $name,
        // which defaults to null if no value is provided.
        $this->name = $name; // Assigns $name during object construction.
    }

    public function getName(): ?string { // Getter Method
        return $this->name; // Returns the value of $name, which can be a string or null.
    }
}

// Example 1: Create a Person object without a name.
$person = new Person(); // $name is null by default.
echo $person?->getName(); // Outputs nothing because getName() returns null.
    // If $person is null, it does not throw an error.
    // Instead, the expression evaluates to null.

// Example 2: Create a Person object with a name.
$person = new Person("Alice"); // $name is "Alice".
echo $person?->getName(); // Outputs: Alice

?>