... Sharing Configuration Across Files
You can centralize configuration settings in a single file and reuse them.

config.php

<?php
return [
    'database' => [
        'host' => 'localhost',
        'name' => 'test',
        'user' => 'root',
        'password' => '',
    ],
];
?>

index.php

<?php
$config = include 'config.php';

$db = new PDO(
    "mysql:host={$config['database']['host']};dbname={$config['database']['name']}",
    $config['database']['user'],
    $config['database']['password']
);

echo "Connected to the database!";
?>

