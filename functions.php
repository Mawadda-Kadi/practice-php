....... How to include functions in HTML:

functions.php

<?php
function greet($name) {
    return "Hello, " . htmlspecialchars($name) . "!";
}
?>


index.php

<?php
require 'functions.php';

echo greet("John");
?>
