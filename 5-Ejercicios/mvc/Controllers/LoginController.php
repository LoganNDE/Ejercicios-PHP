<?php
    require_once __DIR__ . "/../Models/LoginModel.php";
    session_start();

    Class LoginController{

        private $loginModel;

        public function __construct() {
            $this->loginModel = new LoginModel();
        }


        public function checkLogin($user, $password) {
            $data = $this->loginModel->getUserData($user);
            if (!empty($data)){
                //ENCRIPTACION DE CONTRASEÑA
                if ($data['username'] === $user && password_verify( $password, $data['password'])){
                    $_SESSION["isLogin"] = true;
                    header("Location: ok.php");
                }else{
                    header("Location: ko.php");
                    exit();
                }
            }else{
                header("Location: ko.php");
                exit();
            }
        }



        public function userRegister($user, $password) {
            $hashPassword = password_hash($password,PASSWORD_DEFAULT);
            $registerSuccess = $this->loginModel->register($user, $hashPassword);
            if ($registerSuccess){
                header("Location: ok.php");
                exit();
            }else{
                header("Location: ko.php");
                exit();
            }
        }
        
    }

?>