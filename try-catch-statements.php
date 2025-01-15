...................... Try/Catch Statements

Syntax:

<?php

try {
    // Code that may throw an exception.
} catch (ExceptionType $e) {
    // Handle the exception.
} finally {
    // Optional block executed regardless of success or failure.
}

?>

Key Features:
. Catching Multiple Exceptions

<?php
try {
    // Some code that may throw exceptions.
} catch (TypeError | DivisionByZeroError $e) {
    echo "Caught error: " . $e->getMessage();
}
?>

. finally Block
A finally block runs whether or not an exception was thrown,
allowing cleanup or logging.

<?php
try {
    // Code that may throw an exception.
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage();
} finally {
    echo "This runs no matter what.";
}
?>

. Throwing Exceptions
    Exceptions are thrown using the throw keyword.

<?php
function divide($a, $b)
{
    if ($b === 0) {
        throw new DivisionByZeroError("Cannot divide by zero.");
    }
    return $a / $b;
}

// Ternary Expression

function divide($a, $b)
{
    return $b === 0
        ? throw new DivisionByZeroError("Cannot divide by zero.")
        : $a / $b;
}

?>

=======================================================

........ Types of Erros Handling

<?php

// 1. Handling Division by Zero (DivisionByZeroError)

try {
    $result = 10 / 0; // This will throw a DivisionByZeroError
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "Execution completed.";
}

//output
/*  Error: Division by zero
    Execution completed.   */

-------------------------------------

// 2. Catching Multiple Exception Types

try {
    $num = "string";
    if (!is_int($num)) {
        throw new TypeError("Expected an integer.");
    }

    echo 10 / 0; // This will throw DivisionByZeroError
} catch (TypeError | DivisionByZeroError $e) {
    echo "Caught exception: " . $e->getMessage();
}

//output
/*  Caught exception: Expected an integer.  */

-------------------------------------

// 3. Using finally for Cleanup

function openFile($filename)
{
    if (!file_exists($filename)) {
        throw new Exception("File not found: $filename");
    }
    return fopen($filename, "r");
}

try {
    $file = openFile("nonexistent.txt");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo "Cleaning up resources.";
}

//output
/*  Error: File not found: nonexistent.txt
    Cleaning up resources.  */

---------------------------------------

// 4. Custom Exception Handling

class CustomException extends Exception {}

function doSomething($input)
{
    if ($input < 0) {
        throw new CustomException("Negative values are not allowed.");
    }
    return sqrt($input);
}

try {
    echo doSomething(-5);
} catch (CustomException $e) {
    echo "Caught a custom exception: " . $e->getMessage();
}

// output
/* Caught a custom exception: Negative values are not allowed. */

---------------------------------------------

// 5. Catching All Exceptions (Throwable)
// The Throwable interface catches both Error and Exception.

try {
    // Undefined function call
    undefinedFunction();
} catch (Throwable $e) {
    echo "Caught error or exception: " . $e->getMessage();
}

// output
/*  Caught error or exception:
    Call to undefined function undefinedFunction()  */

-----------------------------------------------

// 6. Chained Exceptions
// allows for chaining exceptions by passing a previous exception as a parameter.

try {
    try {
        throw new Exception("Initial exception");
    } catch (Exception $e) {
        throw new Exception("Secondary exception", 0, $e);
    }
} catch (Exception $e) {
    echo "Caught: " . $e->getMessage() . "\n";
    if ($e->getPrevious()) {
        echo "Previous: " . $e->getPrevious()->getMessage();
    }
}

//output
/*  Caught: Secondary exception
    Previous: Initial exception  */

=========================================================