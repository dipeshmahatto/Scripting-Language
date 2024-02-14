<?php
// Handle GET request
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "Hello, $name!";
    } else {
        echo "Error: Name parameter is missing in the GET request!";
    }
}

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
        echo "You submitted the message: $message";
    } else {
        echo "Error: Message parameter is missing in the POST request!";
    }
}
?>
