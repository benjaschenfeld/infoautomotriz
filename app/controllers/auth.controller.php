<?php
require_once './app/models/user.model.php';
require_once './app/views/user.view.php';


class AuthController {

    private $userModel;
    private $userView;
    public function __construct(){
        $this->userModel = new UserModel();
        $this->userView = new UserView();
        
    }

    public function showRegistrarse(){
        //$registrarse = $this->autosModel->getRegistrarse();
        $this->userView->showRegistrarse();
    }
    
    public function addCuenta(){
        if(!empty($_POST['email'] && $_POST['password'])){
            $username = $_POST['email'];
            $userpassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $this->userModel->add($username, $userpassword);
            
            header("Location: " . BASE_URL . "login");
        } else {
            $this->userView->showError("Complete los datos solicitados");
        }
    }

    public function showFormLogin(){
        $this->userView->showFormLogin();
    }

    public function validateUser(){
        /**Capturo datos del form */
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        /**Me traigo el Usuario de mi tabla usuarios */
        $usuario = $this->userModel->get($email);
        
        if(!$usuario) {
            $this->userView->showError("Debe regitrarse");
            die();
        }
        /**Verifico que sean correcto los datos traidos con los que ingreso el usuario por el formulario */
        if(password_verify($password,$usuario->pasword)) {
            /**Inicio sesion */
            session_start();
            $_SESSION['ID_USUARIO'] = $usuario->id;
            $_SESSION['EMAIL'] = $usuario->nombre;
            $_SESSION['PASSWORD'] = $usuario->password;
            $_SESSION['IS_LOGGED'] = true;
            
            header("Location: " . BASE_URL);
        }
        else {
            $this->userView->showError("Contraseña incorrecta");
        }
    }

    public function destroyLogin() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
    public function showContacto(){
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        $this->userView->showContacto();
    }


}
