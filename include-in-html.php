header.php

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>

footer.php

    <footer>
        <p>&copy; <?= date('Y') ?> My Website</p>
    </footer>
</body>
</html>


index.php

<?php
include 'header.php';
?>
<main>
    <p>This is the main content of the page.</p>
</main>
<?php
include 'footer.php';
?>