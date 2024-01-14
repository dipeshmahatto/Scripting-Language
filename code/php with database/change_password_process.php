<?php
require "user.php";
$username = $_POST["username"];
$oldpassword = $_POST["oldpassword"];
$newpassword = $_POST["newpassword"];

if (empty($oldpassword) || empty($newpassword)) {
    echo "username and /or password is empty";
    die;
}
// if ($username == "admin" && $password == "123") {
//     echo "Valid user";
// } else {
//     echo "invaild user";
// }

$user = new user($username,$oldpassword);
$result = $user->change_password($newpassword,$username);

if (!$result) {
    echo "password changed successful ";
} else {
    echo "password changed failed";
}


?>