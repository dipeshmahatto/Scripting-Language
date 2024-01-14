<?
require "user.php";

session_start();
if (empty($_SESSION['loggedin_usesr'])) {
    header("Location:login.php");
}

echo "Welcome " . $_SESSION['loggedin_user']
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>databse</title>
</head>

<body>
    <form action="login.php">
        <div>
            <input type="submit" value="Logout">
        </div>
    </form>
    <form action="change_password.php" method="post">
        <input type="submit" value="Change Password">
    </form>
</body>

</html>