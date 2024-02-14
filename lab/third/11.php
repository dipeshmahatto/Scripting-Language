<?php
if(isset($_SESSION['username'])) {
    echo "Welcome, " . $_SESSION['username'] . "!<br>";
} else {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === 'Dipesh' && $password === '123') {
            echo "Login successful! Welcome, " . "!<br>";
        } else {
            echo "Invalid username or password.";
        }
    } else {
?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Login">
        </form>
<?php
    }
}
?>
