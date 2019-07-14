<?php
class ModelLogin{
    private $db;
    public function __construct(){
        $this->db = new Sql;
    }

    public function login($user, $pass){
        $this->db->query("SELECT * FROM tbl_usuarios
        WHERE usu_usuario = :usuario
        AND usu_password = :password");

        $this->db->bind(':usuario', $user);
        $this->db->bind(':password', $pass);

        return $this->db->register();


    }
}

?>
