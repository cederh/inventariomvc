<?php
class ModelInventory{
   private $db;

   public function __construct(){
      $this->db = new Sql;
   }

   public function get_inventaries(){
      $this->db->query("SELECT * FROM tbl_inventario");
      return $this->db->registers();
   }

   public function get_inventory($id = 0){
      $this->db->query("SELECT * FROM tbl_inventario i
                        INNER JOIN tbl_usuarios s
                        ON i.idusuario = s.idusuario
                        INNER JOIN tbl_categoria c
                        ON i.idcategoria = c.idcategoria
                        INNER JOIN tbl_proveedores p
                        ON i.idproveedor = p.idproveedor
                        WHERE idproducto = :id
                        ");
      $this->db->bind(':id', $id);
      return $this->db->register();
   }


   // public function get_providers()
   // {
   //    $this->db->query("SELECT * FROM tbl_proveedores");
   //    return $this->db->registers();
   // }
   //
   // public function get_categories()
   // {
   //    $this->db->query("SELECT * FROM tbl_categoria");
   //    return $this->db->registers();
   // }
   // public function get_category($id = 0){
   //    $this->db->query("SELECT * FROM tbl_categoria p
   //                      INNER JOIN tbl_usuarios s
   //                      ON p.idusuario = s.idusuario
   //                      WHERE idcategoria = :id
   //                      ");
   //    $this->db->bind(':id', $id);
   //    return $this->db->register();
   // }

   public function add_inventory($inventory){
      $this->db->query('INSERT INTO tbl_inventario(
                        nombre_producto, stock, precio, idcategoria, idproveedor, idusuario, descripcion, fecha_mod)
                        VALUES(:nombre, :cantidad, :precio, :categoria, :proveedor, :idusuario, :descripcion, NOW())');

      $this->db->bind(':nombre',$inventory['nombre']);
      $this->db->bind(':cantidad',$inventory['cantidad']);
      $this->db->bind(':precio',$inventory['precio']);
      $this->db->bind(':categoria',$inventory['categoria']);
      $this->db->bind(':proveedor',$inventory['proveedor']);
      $this->db->bind(':descripcion',$inventory['descripcion']);
      $this->db->bind(':idusuario',$inventory['idusuario']);

      if ($this->db->execute()) {
         return true;
      } else {
         return false;
      }
   }

   // public function update_category($id, $categories){
   //    $this->db->query("UPDATE tbl_categoria
   //                      SET nombre = :nombre, descripcion = :descripcion, idusuario = :idusuario, fecha_mod = NOW()
   //                      WHERE idcategoria = :id
   //                   ");
   //
   //    $this->db->bind(':nombre',$categories['nombre']);
   //    $this->db->bind(':descripcion',$categories['descripcion']);
   //    $this->db->bind(':idusuario',$categories['idusuario']);
   //
   //    $this->db->bind(':id', $id);
   //
   //    if ($this->db->execute()) {
   //       return true;
   //    }else {
   //       return false;
   //    }
   // }
}
 ?>
