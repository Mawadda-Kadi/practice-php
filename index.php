<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Form Example</title>
</head>

<body>
    <form name="contact" method="post" action="process.php">

        <!-- Name Input -->
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required>

        <!-- Email Input -->
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required>

        <!-- Age Input -->
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" required>
        <br><br>

        <!-- Reason of Contact -->
        <label for="reason">Reason of Contact:</label>
        <select id="reason" name="reason" required>
            <option value="question">Question</option>
            <option value="recommendation">Recommendation</option>
            <option value="say_hello">Say Hello</option>
        </select>
        <br><br>

        <!-- Favorite Serials -->
        <label>Favorite Serials (select all that apply):</label><br>
        <input type="checkbox" id="friends" name="favorites[]" value="Friends">
        <label for="friends">Friends</label><br>

        <input type="checkbox" id="csi" name="favorites[]" value="CSI">
        <label for="csi">CSI</label><br>

        <input type="checkbox" id="mentalist" name="favorites[]" value="The Mentalist">
        <label for="mentalist">The Mentalist</label><br>

        <input type="checkbox" id="arcane" name="favorites[]" value="Arcane">
        <label for="arcane">Arcane</label><br>

        <input type="checkbox" id="nikita" name="favorites[]" value="Nikita">
        <label for="nikita">Nikita</label><br>
        <br>

        <button type="submit">Submit</button>
    </form>

    <!-- Arithmetic Operations Form -->
    <form name="arithmetic-operations" method=" post" action="process.php">
        <label for="number1">Enter the first number:</label>
        <input type="number" id="number1" name="number1" required><br><br>

        <label for="number2">Enter the second number:</label>
        <input type="number" id="number2" name="number2" required><br><br>

        <label for="operation">Choose an operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>

        <button type="submit">Calculate</button>
    </form>
</body>

</html>