<?php
require_once './libs/smarty-4.3.4/libs/Smarty.class.php';
class  AutomotrizView {
    private $smarty;

    public function __construct() {
      $this->smarty = new Smarty();  
    }

    public function showAutos($autos, $categorias){
      $this->smarty->assign('autos', $autos);
      $this->smarty->assign('categorias', $categorias);
      $this->smarty->display('./app/templates/tablaAutos.tpl');  
    }

    public function showCategorias($categorias){  
      $this->smarty->assign('categorias', $categorias);

      $this->smarty->display('./app/templates/tablaCategorias.tpl');  
    }

    public function showDetalleAuto($autos){
      $this->smarty->assign('autos', $autos);
      $this->smarty->display('./app/templates/detalle.tpl');
    }

    public function showFiltrado($autos){
      $this->smarty->assign('autos', $autos);

      $this->smarty->display('./app/templates/filtrado.tpl');  
    }

    public function showFormEdit($autos, $categorias){
      $this->smarty->assign("auto", $autos);
      $this->smarty->assign('categorias', $categorias);

      $this->smarty->display('./app/templates/form_auto_edit.tpl');
    }

    public function showFormEditCat($id, $categoria){
      $this->smarty->assign('id', $id);
      $this->smarty->assign('categoria', $categoria);

      $this->smarty->display('./app/templates/form_categoria_edit.tpl');
    }

    public function showError($error){
      $this->smarty->assign('error', $error);

      $this->smarty->display("./app/templates/alert.tpl");
    }




  }