<?php
$user = isset($_REQUEST['user']) ? $_REQUEST['user'] : '';
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';


$userLogin = ["User" => "admin", "Password" => "1234"];
 
if (empty($user) || empty($password)) {
    header("Location: login.html");
    exit();
} else {
    if ($user == $userLogin['User'] && $password == $userLogin['Password']) {
        header("Location: ok.php");
        exit();
    } else {
        header("Location: ko.php");
        exit();
    }
}

?>
