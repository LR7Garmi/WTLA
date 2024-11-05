<?php
    setcookie("username", "JohnDoe", time() + (86400 * 30), "/");
    if (isset($_COOKIE["username"])) {
        echo "Cookie 'username' is set!<br>";
        echo "Value: " . $_COOKIE["username"];
    } else {
        echo "Cookie is not set!";
    }
?>
