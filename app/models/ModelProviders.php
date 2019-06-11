<?php

class ModelProviders{
   private $db;

   public function __construct(){
      $this->db = new Sql;
   }

   public function add_provider($providers){
      $this->db->query('INSERT INTO tbl_proveedores(
                        nombre, direccion, telefono, descripcion, idusuario, fecha_mod)
                        VALUES(:nombre, :direccion, :telefono, :descripcion, :idusuario, NOW())');

      $this->db->bind(':nombre',$providers['nombre']);
      $this->db->bind(':telefono',$providers['telefono']);
      $this->db->bind(':direccion',$providers['direccion']);
      $this->db->bind(':descripcion',$providers['descripcion']);
      $this->db->bind(':idusuario',$providers['idusuario']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
   }

}

?>
