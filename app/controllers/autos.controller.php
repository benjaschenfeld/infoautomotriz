<?php
require_once './app/models/autos.model.php';
require_once './app/models/categorias.model.php';
require_once './app/models/user.model.php';
require_once './app/views/automotriz.view.php';
 
class AutosController {
    
    private $autosModel;
    private $categoriasModel;
      private $userModel;
    private $automotrizView;

    public function __construct(){
        $this->autosModel = new AutosModel();
        $this->categoriasModel = new CategoriasModel();
        $this->userModel = new UserModel();
        $this->automotrizView = new AutomotrizView();
    }  

    public function showHome() {
        session_start();
        $autos = $this->autosModel->getAllWithCategory();
        $categorias = $this->categoriasModel->getByName();
        $this->automotrizView->showAutos($autos, $categorias);
    } 

    public function showDetalle($id_auto) {
        $detalle = $this->autosModel->getDetalle($id_auto);
        $this->automotrizView->showDetalleAuto($detalle);
    }

    public function addAuto(){
        $this->userModel->checkLogged();

        if(!empty($_POST['nombre'] && $_POST['anio'] && $_POST['motor'] && $_POST['marca'] && $_POST['caracteristicas']&& $_POST['categoria'])){
            $nombre = $_POST['nombre'];
            $anio = $_POST['anio'];
            $motor = $_POST['motor'];
            $marca = $_POST['marca'];
            $id_categoria = $_POST['categoria'];
            $caracteristicas = $_POST['caracteristicas'];
            
            $this->autosModel->add($nombre, $anio, $motor, $marca, $id_categoria, $caracteristicas);
                
            header("Location: " . BASE_URL);
        } 
        else {
            $this->automotrizView->showError("Debe completar los datos solicitados!!");
        }
    }

    public function deleteAuto($id){
        $this->userModel->checkLogged();
        $this->autosModel->delete($id);

        header("Location: " . BASE_URL);

    }
    public function showFormEdit($id){
        $auto = $this->autosModel->getById($id);
        $categorias = $this->categoriasModel->getByName();
        $this->automotrizView->showFormEdit($auto, $categorias);
    }

    public function editAuto($id){
        $this->userModel->checkLogged();
        if(isset($_POST['nombre']) && isset($_POST['anio']) && isset($_POST['motor']) && isset($_POST['marca']) && isset($_POST['caracteristicas']) && isset($_POST['categoria'])) {
            $nombre = $_POST['nombre'];
            $anio = $_POST['anio'];
            $motor = $_POST['motor'];
            $marca = $_POST['marca'];
            $id_categoria = $_POST['categoria'];
            $caracteristicas = $_POST['caracteristicas'];    
            
            $this->autosModel->edit($id, $nombre, $anio, $motor, $marca, $id_categoria, $caracteristicas);
            
            header("Location: " . BASE_URL);
        }
        else {
            $this->automotrizView->showError("Debe completar los datos solicitados!!");
        }
    }   
    

}



