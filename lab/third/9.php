<?php
session_start();

if(isset($_SESSION['username'])) {
    echo "Welcome back, " . $_SESSION['username'] . "!<br>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === 'Dipesh' && $password === '123') {
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome, " . $_SESSION['username'] . "!<br>";
            echo "<a href='logout.php'>Logout</a>";
        } else {
            echo "Invalid username or password. Please try again.";
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
