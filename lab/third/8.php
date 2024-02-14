<!DOCTYPE html>
<html>
<head>
    <title>File Reader</title>
</head>
<body>

<?php
// Specify the file path
$filename = "8.txt";

if (file_exists($filename)) {
    $content = file_get_contents($filename);

    echo "<h2>File Content:</h2>";
    echo "<pre>$content</pre>";
} else {
    echo "<h2>File not found.</h2>";
}
?>

</body>
</html>
