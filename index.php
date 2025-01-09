<?php // Lesson 1 : PHP Introduction

    $name = "Mawadda";
    $petName = "Blackie";
    $wifeName = "Sarah";
    echo "Hello, $name! Welcome to PHP. I know you miss $wifeName and $petName";
    echo "<br>"; // Add a line break
    echo nl2br("\n"); // Converts newline to HTML <br>
?>

<?php // Lesson 2: Variables and Data Types

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

?>
