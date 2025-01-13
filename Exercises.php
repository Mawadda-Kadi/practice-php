Exercises
1. Write an anonymous function that filters an array of numbers to return only the odd numbers.

<?php

    $numbers3 = [1, 2, 3, 4, 5, 6];

    $odd_numbers = array_filter($numbers3, function($num) {

        return $num % 2 !== 0;
    });

    print_r($odd_numbers);

?>

2. Create a higher-order function that returns an anonymous function
to calculate the power of a number.

<?php
function powerOf($factor) {
    return function ($num) use ($factor) {
        return $num ** $factor;
    };
}

$secondPower = powerOf(2);
echo $secondPower(3);

echo "<br>";

$thirdPower = powerOf(3);
echo $thirdPower(2);

echo "<br>";

?>


3. Use an anonymous function to sort an array of strings by their lengths.
<?php

$people2 = [
        ["name" => "Alice", "age" => 30],
        ["name" => "Bob", "age" => 25],
        ["name" => "Charlie", "age" => 35],
    ];

usort($people2, function($a, $b) {
    return strlen($a['name']) <=> strlen($b['name']);
});

print_r($people2);

echo "<br>";

?>

4. Create a Person class with properties for name and age, and a method to display the person's information.

<?php

?>

5. Create an array of your favorite movies and display them.

<?php

?>

6. Write a class hierarchy where a Dog class inherits from an Animal class and overrides the speak method.
<?php

?>


Create a script that calculates the average of an array of numbers.
Create a form that accepts a user's name and displays a greeting.
Build a form to accept two numbers and perform basic arithmetic operations.