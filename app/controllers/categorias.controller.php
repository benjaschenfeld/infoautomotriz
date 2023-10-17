<?php
require_once './app/models/categorias.model.php';
require_once './app/views/automotriz.view.php';
require_once './app/models/user.model.php';

class CategoriasController{
    private $categoriasModel;
    private $automotrizView;
    private $userModel;

    public function __construct(){
        $this->categoriasModel = new CategoriasModel();
        $this->automotrizView  = new AutomotrizView();
        $this->userModel = new UserModel();
    }

    public function showHome(){
        $categorias = $this->categoriasModel->getAll();
        $this->automotrizView->showCategorias($categorias);
    }

    public function filtrar($id){
        $autos = $this->categoriasModel->getAutosByCategoria($id);
        $this->automotrizView->showFiltrado($autos);
    }
    
    public function addCategoria(){
        $this->userModel->checkLogged();

        if(!empty($_POST['nombre'] && $_POST['caracteristicas'])){
            $nombre = $_POST['nombre'];
            $caracteristicas = $_POST['caracteristicas'];
            
            $this->categoriasModel->add($nombre, $caracteristicas);
                
            header("Location: " . BASE_URL);
        } 
        else {
            $this->automotrizView->showError("Debe completar los datos solicitados!!");
        }
    }

    public function deleteCategoria($id){
        /*Controlar que no se borre una categoria con autos asociados*/
        $this->userModel->checkLogged();

        $this->categoriasModel->delete($id);
        if($this->categoriasModel->delete($id)) {
            $this->automotrizView->showError("Tiene que eliminar los autos asociados en primer lugar");
            die();
        } else {
            header("Location: " . BASE_URL);
        }
    }

    public function showFormCat($id){
        $categoria = $this->categoriasModel->getById($id);
        $this->automotrizView->showFormEditCat($id, $categoria);
    }

    public function editCategoria($id){
        $this->userModel->checkLogged();

        if(isset($_POST['nombre']) && isset($_POST['caracteristicas'])){
            $nombre = $_POST['nombre'];
            $caracteristicas = $_POST['caracteristicas'];
            
            $this->categoriasModel->edit($id, $nombre, $caracteristicas);

            header("Location: " . BASE_URL);
        }
        else {
            $this->automotrizView->showError("Debe completar los datos solicitados!!");
        }
    }

}