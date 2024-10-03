<?php
$user = isset($_REQUEST['user']) ? $_REQUEST['user'] : '';
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';

if (empty($user) || empty($password)) {
    header("Location: login.html");
    exit();
} else {
    if ($user == 'admin' && $password == '1234') {
        header("Location: ok.php");
        exit();
    } else {
        header("Location: ko.php");
        exit();
    }
}

?>
