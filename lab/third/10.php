<?php
setcookie("user", "Dipesh Mahato", time() + 3600);
if (isset($_COOKIE['user'])) {
    echo "Welcome back, " . $_COOKIE['user'] . "!";
} else {
    echo "WHO ARE YOU !";
}
?>
