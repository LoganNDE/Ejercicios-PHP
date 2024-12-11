<?php
require_once __DIR__ . "/../Controllers/LoginController.php";

$loginController = new LoginController();

$user = isset($_REQUEST['user']) ? $_REQUEST['user'] : '';
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
$action = isset($_REQUEST['login']) ? $_REQUEST['login'] : 'register';

echo $user . "<br>";
echo $password;

if (empty($user) || empty($password)) {
    header("Location: login.html");
    exit();
} else {
    switch($action){
        case 'login':
            $loginController->checkLogin($user, $password);
            break;
        default:
            $loginController->userRegister($user, $password);
    }
}

?>
