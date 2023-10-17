<?php
require_once './libs/smarty-4.3.4/libs/Smarty.class.php';

class  UserView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();  
      }
    public function showRegistrarse(){
        $this->smarty->display('./app/templates/form_registrarse.tpl');

    }

    public function showFormLogin(){
        $this->smarty->display('./app/templates/form_login.tpl');
    }

    public function showError($error){
        $this->smarty->assign('error', $error);
        $this->smarty->display("./app/templates/alert.tpl");
    }
    public function showContacto(){
        $this->smarty->assign('titulo', "Contactanos en: ");
        $this->smarty->display("app/Templates/contacto.tpl");
    }
    
}