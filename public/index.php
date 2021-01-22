<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sid = "000";

session_start();
$page_name = 'login';

if (isset($_SESSION['username'], $_SESSION['password']) &&
    $_SESSION['username'] === 'cemeris' &&
    $_SESSION['password'] === '123'
) {
    if (isset($_GET['page']) && $_GET['page'] === "logout") {
        $page_name = "logout";
    }
    else {
        $page_name = "todo";
    }
}
elseif (isset($_GET['page']) && $_GET['page'] === "autheticate") {
    include "../bootcamp_app/actions/authenticate.php";
}
else {
    //$page_name = "access_denied";
}

include "../bootcamp_app/pages/" . $page_name . ".php";

?>
