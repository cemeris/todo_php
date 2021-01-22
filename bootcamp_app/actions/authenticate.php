
<?php

if (isset($_GET['sid']) &&
    $_GET['sid'] === $sid &&
    isset($_GET['username']) &&
    isset($_GET['password']) &&
    $_GET['username'] == "cemeris" &&
    $_GET['password'] == "123"
) {
    $_SESSION['username'] = $_GET['username'];
    $_SESSION['password'] = $_GET['password'];
    header("Location: index.php");
}
