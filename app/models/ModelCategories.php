<?php
class ModelCategories{
   private $db;

   public function __construct(){
      $this->db = new Sql;
   }

   public function get_categories(){
      $this->db->query("SELECT * FROM tbl_categoria");
      return $this->db->registers();
   }

   public function get_category($id = 0){
      $this->db->query("SELECT * FROM tbl_categoria p
                        INNER JOIN tbl_usuarios s
                        ON p.idusuario = s.idusuario
                        WHERE idcategoria = :id
                        ");
      $this->db->bind(':id', $id);
      return $this->db->register();
   }

   public function add_category($categories){
      $this->db->query('INSERT INTO tbl_categoria(
                        nombre_categoria, descripcion, idusuario, fecha_mod)
                        VALUES(:nombre, :descripcion, :idusuario, NOW())');

      $this->db->bind(':nombre',$categories['nombre']);
      $this->db->bind(':descripcion',$categories['descripcion']);
      $this->db->bind(':idusuario',$categories['idusuario']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
   }

   public function update_category($id, $categories){
      $this->db->query("UPDATE tbl_categoria
                        SET nombre_categoria = :nombre, descripcion = :descripcion, idusuario = :idusuario, fecha_mod = NOW()
                        WHERE idcategoria = :id
                     ");

      $this->db->bind(':nombre',$categories['nombre']);
      $this->db->bind(':descripcion',$categories['descripcion']);
      $this->db->bind(':idusuario',$categories['idusuario']);

      $this->db->bind(':id', $id);

      if ($this->db->execute()) {
         return true;
      }else {
         return false;
      }
   }
}
 ?>
