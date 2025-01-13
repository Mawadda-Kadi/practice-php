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

<?php // Lesson 4: Objects and Classes in PHP

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
        // Properties are variables that belong to a class. They hold data for the object.

class Car {
    public $brand; // Defining properties
}

$myCar->brand; // Assigning properties

    // Methods
        // Methods are functions defined within a class.
        // They represent actions or behaviors of the object.

class Car {
   public function drive() {  // Defining Methods

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


