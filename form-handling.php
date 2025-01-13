Lesson 6: Forms and User Input Using PHP 8.0

1. Handling User Input Through HTML Forms

PHP allows you to collect data sent via HTML forms using the $_GET and $_POST superglobals.

... HTML Form Example
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <form method="post" action="process.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

The method="post" specifies that data will be sent using the POST method.
The action="process.php" defines the server-side script to handle the form submission.


2. $_GET and $_POST Superglobals

$_GET: Retrieves data sent via the GET method. Data is appended to the URL.
$_POST: Retrieves data sent via the POST method. Data is included in the HTTP request body.


<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Accessing data from the form
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    // $_POST['name'] ?? '': Ensures no errors if the key is missing.

    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    // htmlspecialchars(): Converts special characters to HTML entities to prevent XSS attacks.
}
?>


3. Form Validation

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    // Validate name
    if (empty($_POST['name'])) {
        $errors['name'] = "Name is required.";
    }

    // Validate email
    if (empty($_POST['email'])) {
        $errors['email'] = "Email is required.";
    }

    if (empty($errors)) {
        echo "Form submitted successfully!";
    } else {
        foreach ($errors as $field => $error) {
            echo ucfirst($field) . ": $error<br>";
        }
    }
}
?>

4. Sanitizing and Validating Input
Sanitizing and validating input ensures data integrity and security.

... Sanitization
Sanitization removes unwanted or dangerous data.

<?php
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
?>

... Validation
Validation checks if the data meets specific criteria.

<?php
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email address!";
} else {
    echo "Invalid email address.";
}
?>

Combining Sanitization and Validation

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize input
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } elseif (empty($name)) {
        echo "Name is required.";
    } else {
        echo "Name: $name<br>Email: $email";
    }
}
?>

Complete Example

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    // Sanitize input
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate input
    if (empty($name)) {
        $errors['name'] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    if (empty($errors)) {
        echo "Form submitted successfully!<br>";
        echo "Name: $name<br>Email: $email";
    } else {
        foreach ($errors as $field => $error) {
            echo ucfirst($field) . ": $error<br>";
        }
    }
}
?>

Key Takeaways:
- Use $_GET for retrieving query string parameters and $_POST for secure form submissions.
- Always validate and sanitize user input to prevent attacks like XSS and SQL injection.
- Use functions like filter_var() and htmlspecialchars() for sanitization and validation.