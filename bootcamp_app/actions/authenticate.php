
<?php

if ($_GET['username'] == "cemeris" && $_GET['password'] == "123") {
    $_SESSION['username'] = $_GET['username'];
    $_SESSION['password'] = $_GET['password'];
    header("Location: index.php");
}
