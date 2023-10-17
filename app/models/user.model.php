<?php
class UserModel {
    
    private $db;

    public function __construct(){
        $this->db = $this->getDb();
    }

    private function getDB() {
        $db = new PDO('mysql:host=localhost;'.'dbname=automotrizinfo_bd;charset=utf8', 'root', '');
        return $db;
    }

    public function get($email){
        $query = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $query->execute([$email]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function add($useremail, $userpassword){
        $query = $this->db->prepare("INSERT INTO user (email, pasword) VALUES (?,?)");
        $query->execute([$useremail, $userpassword]);
    }

    public function checkLogged() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }

}