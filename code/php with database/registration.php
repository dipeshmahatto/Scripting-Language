<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>
</head>

<body style="background-color: rgb(238, 81, 9);color: white;">
    <form action="process_registration.php" method="post">
        <div> <label for="username">Username: </label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <br>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password">
        </div><br>
        <input type="submit" value="SignUp" />

    </form>
</body>

</html>