<?php

class ModelUsers{
   private $db;

   public function __construct(){
      $this->db = new Sql;
   }

   public function add_user($user){
      $this->db->query('INSERT INTO tbl_usuarios(
                        usu_nombre, usu_apellido, usu_genero, usu_dui, usu_usuario,
                        usu_tipo, usu_password, usu_estado, fecha_mod)
                        VALUES(:nombre, :apellido, :genero, :dui, :usuario, :tipo, :password, 1, NOW())');


      $this->db->bind(':nombre',$user['nombre']);
      $this->db->bind(':apellido',$user['apellido']);
      $this->db->bind(':genero',$user['genero']);
      $this->db->bind(':dui',$user['dui']);
      $this->db->bind(':usuario',$user['user']);
      $this->db->bind(':tipo',$user['user_type']);
      $this->db->bind(':password',$user['pass']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
   }

   public function get_users(){
      $this->db->query("SELECT * FROM tbl_usuarios WHERE usu_estado = 1");
      return $this->db->registers();
   }

   public function get_disable(){
      $this->db->query("SELECT * FROM tbl_usuarios WHERE usu_estado = 2");
      return $this->db->registers();
   }

   public function get_user($id = 0){
      $this->db->query("SELECT * FROM tbl_usuarios WHERE idusuario = :id");
      $this->db->bind(':id', $id);
      return $this->db->register();
   }

   public function update_user($id, $user){
      $this->db->query("UPDATE tbl_usuarios
                        SET usu_nombre = :nombre, usu_apellido = :apellido, usu_genero = :genero, usu_dui = :dui, usu_usuario = :usuario, usu_tipo = :tipo, fecha_mod =  NOW()
                        WHERE idusuario = :id");

      $this->db->bind(':nombre', $user['nombre']);
      $this->db->bind(':apellido', $user['apellido']);
      $this->db->bind(':genero', $user['genero']);
      $this->db->bind(':dui', $user['dui']);
      $this->db->bind(':usuario', $user['user']);
      $this->db->bind(':tipo', $user['user_type']);

      $this->db->bind(':id', $id);

      if ($this->db->execute()) {
         return true;
      }else {
         return false;
      }
   }

   public function update_password($id, $user){
      $this->db->query("UPDATE tbl_usuarios
                        SET usu_password = :password, fecha_mod =  NOW()
                        WHERE idusuario = :id");

      $this->db->bind(':password', $user['pass']);
      $this->db->bind(':id', $id);

      if ($this->db->execute()) {
         return true;
      }else {
         return false;
      }
   }

   public function disable($id, $user){
      $this->db->query("UPDATE tbl_usuarios
                        SET usu_estado = 2, fecha_mod =  NOW()
                        WHERE idusuario = :id");

      $this->db->bind(':id', $id);

      if ($this->db->execute()) {
         return true;
      }else {
         return false;
      }
   }
}

?>
