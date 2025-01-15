<?php

// .......... 1. File Opening and Closing

$file = fopen("example.txt", "r"); // Opens the file in read mode
if ($file) {
    // Work with the file
    fclose($file); // Always close the file after you're done
}


// .......... 2. File Reading

    // a. Read the Entire File,  file_get_contents()

$content = file_get_contents("example.txt");
echo $content;

    // b. Read Line by Line,  fgets()

$file = fopen("example.txt", "r");
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line;
    }
    fclose($file);
}

    // c. Read File into an Array,  file()

$lines = file("example.txt");
foreach ($lines as $line) {
    echo $line;
}


// ............ 3. File Writing

    // a. Overwrite a File,  file_put_contents()
file_put_contents("example.txt", "This will overwrite the file.");

    // b. Append to a File, fopen() with the mode a for appending.
$file = fopen("example.txt", "a");
if ($file) {
    fwrite($file, "This is appended text.\n");
    fclose($file);
}


// ............. 4. File Checking

    // a. Check if a File Exists,  file_exists()
if (file_exists("example.txt")) {
    echo "File exists!";
} else {
    echo "File does not exist.";
}

    // b. Get File Size, filesize() to get the size of a file in bytes.
$size = filesize("example.txt");
echo "File size: $size bytes";

    // c. Check File Permissions,  is_readable() and is_writable().
if (is_readable("example.txt")) {
    echo "File is readable.";
}
if (is_writable("example.txt")) {
    echo "File is writable.";
}


// ............ 5. Deleting Files,  unlink()
if (file_exists("example.txt")) {
    unlink("example.txt");
    echo "File deleted.";
}


// ............ 6. File Uploads
// If handling file uploads via forms, use the $_FILES superglobal.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['uploadedFile'])) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES['uploadedFile']['name']);

        if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $targetFile)) {
            echo "File uploaded successfully!";
        } else {
            echo "Error uploading file.";
        }
    }
}


// ............. 7. File Locking,  flock()
$file = fopen("example.txt", "r+");
if (flock($file, LOCK_EX)) { // Lock the file for writing
    fwrite($file, "Locked writing.");
    flock($file, LOCK_UN); // Unlock the file
}
fclose($file);


// ............. 8. JSON and Serialization
// Use json_encode() and json_decode() for JSON files,
// and serialize() and unserialize() for PHP-specific serialization.

// a. JSON Example
$data = ["name" => "John", "age" => 30];
file_put_contents("data.json", json_encode($data));

$json = file_get_contents("data.json");
$array = json_decode($json, true);
print_r($array);

// b. Serialization Example
$data = ["name" => "John", "age" => 30];
file_put_contents("data.txt", serialize($data));

$serialized = file_get_contents("data.txt");
$array = unserialize($serialized);
print_r($array);


// ............ 9. Streams and Advanced Operations
// stream_context_create() and stream_get_contents()

$context = stream_context_create([
    'http' => [
        'method' => 'GET',
        'header' => 'User-Agent: PHP'
    ]
]);

$content = file_get_contents("http://example.com", false, $context);
echo $content;







