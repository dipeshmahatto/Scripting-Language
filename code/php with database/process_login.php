<?php
session_start();
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
$result = $user->verify_user();

if (!$result) {
    header('Location:login.php?error=invalid user');
} else {
    $_SESSION['loggedin_user'] = $username;
    header('Location:dashboard.php');
}


?>