.... Dynamic File Inclusion
You can dynamically include files based on variables or conditions.


<?php
$page = $_GET['page'] ?? 'home';

if (file_exists($page . '.php')) {
    include $page . '.php';
} else {
    echo "Page not found.";
}
?>