<?php
require "user.php";
$username = $_POST["username"];
$password = $_POST["password"];

if (empty($username) || empty($password)) {
    echo "username and /or password is empty";
    die;
}
// if ($username == "admin" && $password == "123") {
//     echo "Valid user";
// } else {
//     echo "invaild user";
// }

$user = new user($username, $password);
$result = $user->add_user();

if ($result) {
    echo "Registration successful ";
} else {
    echo "Registration failed";
}


?>