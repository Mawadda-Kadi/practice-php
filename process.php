<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    // Sanitize input
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $age = filter_var($_POST['age'], FILTER_SANITIZE_NUMBER_INT);
    $reason = strip_tags($_POST['reason']);
    $favorites = isset($_POST['favorites']) ? $_POST['favorites'] : [];

    // Validate input
    if (empty($name)) {
        $errors['name'] = "Name is required and cannot be empty or just spaces.";
    } else {
        echo "<h2>Hello, " . $name . "! Welcome!</h2>"; // A greeting message
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }
    if (empty($age) || !filter_var($age, FILTER_VALIDATE_INT) || $age <= 0) {
        $errors['age'] = "Age must be a valid positive integer.";
    }
    if (empty($reason)) {
        $errors['reason'] = "Reason of contact is required.";
    }
    if (!is_array($favorites) || empty($favorites)) {
        $errors['favorites'] = "At least one favorite serial must be selected.";
    }

    // Display results or errors
    if (empty($errors)) {
        echo "Form submitted successfully!<br>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Reason of Contact: " . htmlspecialchars($reason) . "<br>";
        echo "Favorite Serials: " . htmlspecialchars(implode(", ", $favorites)) . "<br>";
        // The implode() function takes the array $favorites
        // and joins the elements into a single string, separated by ", ".
    } else {
        foreach ($errors as $field => $error) {
            echo ucfirst($field) . ": " . htmlspecialchars($error) . "<br>";
        }
    }
}
?>

<?php

// Calculation Process
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if (is_numeric($number1) && is_numeric($number2)) {
        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                $opSymbol = '+';
                break;
            case 'subtract':
                $result = $number1 - $number2;
                $opSymbol = '-';
                break;
            case 'multiply':
                $result = $number1 * $number2;
                $opSymbol = '*';
                break;
            case 'divide':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                    $opSymbol = '/';
                } else {
                    $result = "Error: Division by zero.";
                    $opSymbol = '/';
                }
                break;
            default:
                $result = "Invalid operation.";
                $opSymbol = '';
                break;
        }

        if (is_numeric($result)) {
            echo "<h2>Result: $number1 $opSymbol $number2 = $result</h2>";
        } else {
            echo "<h2>$result</h2>";
        }
    } else {
        echo "<p>Please enter valid numeric values.</p>";
    }
}
?>
