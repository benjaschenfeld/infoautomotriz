<?php
class AutosModel {
    
    private $db;

    public function __construct(){
        $this->db = $this->getDb();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=automotrizinfo_bd;charset=utf8', 'root', '');
        return $db;
    }

    public function getAllWithCategory(){
        $query = $this->db->prepare("SELECT autos.*, categoria.nombre FROM autos INNER JOIN categoria ON autos.id_categoria_ext = categoria.id_categoria");
        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_OBJ); 
    }

    public function getById($id){
        $query = $this->db->prepare("SELECT * FROM autos WHERE id_auto = $id");
        $query -> execute();

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getDetalle($id){
        $query = $this->db->prepare("SELECT caracteristicas FROM autos WHERE id_auto = $id");
        $query->execute();

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function add($nombre, $anio, $motor, $marca, $id_categoria, $caracteristicas){
        $query = $this->db->prepare("INSERT INTO autos (nombres, anio, motor, marca, id_categoria_ext, caracteristicas) VALUES (?,?,?,?,?,?)");
        $query->execute([$nombre, $anio, $motor, $marca, $id_categoria, $caracteristicas]);
    }

    public function delete($id) {
        $query = $this->db->prepare("DELETE FROM autos WhERE id_auto = ?");
        $query->execute([$id]);
    }

    public function edit($id, $nombre, $anio, $motor, $marca, $id_categoria, $caracteristicas){
        $query = $this->db->prepare("UPDATE `autos` SET `nombres` = ?, `anio` = ?, `motor` = ?, `marca` = ?, `id_categoria_ext` = ?, `caracteristicas` = ? WHERE `id_auto` = ?");
        $query->execute([$nombre, $anio, $motor, $marca, $id_categoria, $caracteristicas, $id]);
    }


    
}