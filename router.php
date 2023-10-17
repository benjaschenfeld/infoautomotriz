<?php
require_once './app/controllers/autos.controller.php';
require_once './app/controllers/categorias.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$autos_controller = new AutosController();
$categorias_controller = new CategoriasController();
$auth_controller = new AuthController(); 

switch($params[0]){
    case 'home':
        $autos_controller->showHome();
        $categorias_controller->showHome();
        break;
    case 'detalle':
        if(isset($params[1])) {
            $autos_controller->showDetalle($params[1]);
        }
        break;
    case 'filtrar':
        if(isset($params[1])) {
            $categorias_controller->filtrar($params[1]);
        }
        break;
        case 'contacto':
            $auth_controller= new authController();
            $auth_controller->showContacto();
            break;
    case 'registrarse':
        $auth_controller->showRegistrarse();
        break;
    case 'addCuenta':
        $auth_controller->addCuenta();
        break;
    case 'login':
        $auth_controller->showFormLogin();
        break;
    case 'validar':
        $auth_controller->validateUser();
        break;
    case 'logout':
        $auth_controller->destroyLogin();
        break;
    case 'addItem':
        $autos_controller->addAuto();
        break;
    case 'deleteItem':
        $autos_controller->deleteAuto($params[1]);
        break;
    case 'formEditItem':
        $autos_controller->showFormEdit($params[1]);
        break;
    case 'editItem':
        if(isset($params[1])) {
            $autos_controller->editAuto($params[1]);
        }
        break;
    case 'addCategoria':
        $categorias_controller->addCategoria();
        break;
    case 'deleteCategoria':
        if(isset($params[1])) {
            $categorias_controller->deleteCategoria($params[1]);
        }
        break;
    case 'formEditCat':
        if(isset($params[1])) {
            $categorias_controller->showFormCat($params[1]);    
        }
        break;
    case 'editCategoria':
        if(isset($params[1])) {
            $categorias_controller->editCategoria($params[1]);
        }
        break;
    default:
        echo 'error 404 not found';
        break;
}
    