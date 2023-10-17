<?php

class CategoriasModel {
    
    private $db;
    
    public function __construct(){
        $this->db = $this->getDb();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=automotrizinfo_bd;charset=utf8', 'root', '');
        return $db;
    }

    public function getAll(){
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id) {
        /*Para mostrar el formulario de edit precargado*/
        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
        $query->execute([$id]);
        
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    public function getAutosByCategoria($id){
        /*para el filtrado de categoria*/
        $query = $this->db->prepare("SELECT autos.nombres FROM autos INNER JOIN categoria ON autos.id_categoria_ext = categoria.id_categoria WHERE categoria.id_categoria = $id");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getByName(){
        /*Mostrar las categorias en la tabla auto*/
        $query = $this->db->prepare("SELECT categoria.nombre, categoria.id_categoria FROM categoria");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function add($nombre, $caracteristicas){
        $query = $this->db->prepare("INSERT INTO categoria (nombre, caracteristicas) VALUES(?,?)");
        $query->execute([$nombre, $caracteristicas]);
    }

    public function delete($id){
        try {
            $query = $this->db->prepare("DELETE FROM categoria WHERE id_categoria = ?");
            $query->execute([$id]);
        } catch(Exception $e) {
            return $e;
        }
    }

    public function edit($id, $nombre, $caracteristicas){
        $query = $this->db->prepare("UPDATE `categoria` SET `nombre` = ?, `caracteristicas` = ? WHERE `id_categoria` = ?");
        $query->execute([$nombre, $caracteristicas, $id]);
    }

}