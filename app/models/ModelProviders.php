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

   public function get_providers(){
      $this->db->query("SELECT * FROM tbl_proveedores");
      return $this->db->registers();
   }

   public function get_provider($id = 0){
      $this->db->query("SELECT * FROM tbl_proveedores p
                        INNER JOIN tbl_usuarios s
                        ON p.idusuario = s.idusuario
                        WHERE idproveedor = :id
                        ");
      $this->db->bind(':id', $id);
      return $this->db->register();
   }

   public function update_provider($id, $providers){
      $this->db->query("UPDATE tbl_proveedores
                        SET nombre = :nombre, telefono = :telefono, direccion = :direccion, descripcion = :descripcion, idusuario = :idusuario, fecha_mod = NOW()
                        WHERE idproveedor = :id
                     ");

      $this->db->bind(':nombre',$providers['nombre']);
      $this->db->bind(':telefono',$providers['telefono']);
      $this->db->bind(':direccion',$providers['direccion']);
      $this->db->bind(':descripcion',$providers['descripcion']);
      $this->db->bind(':idusuario',$providers['idusuario']);

      $this->db->bind(':id', $id);

      if ($this->db->execute()) {
         return true;
      }else {
         return false;
      }
   }

}

?>
