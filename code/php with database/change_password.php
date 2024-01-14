<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <form action="change_password_process.php" method="post">
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="oldpassword">Old Password : </label>
            <input type="password" name="oldpassword" id="oldpassword">
        </div>
        <div>
            <label for="newpassword">New Password : </label>
            <input type="password" name="newpassword" id="newpassword">
        </div>
        <input type="submit" value="Change_Password">
    </form>
</body>

</html>