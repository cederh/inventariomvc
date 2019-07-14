<?php
/**
 *
 */
class ModelCompany
{

   function __construct()
   {
      $this->db = new Sql;
   }

   public function get_info(){
      $this->db->query("SELECT * FROM tbl_empresa");
      return $this->db->register();
   }

   public function update($company){
      $this->db->query("UPDATE tbl_empresa
                        SET nombre_empresa = :nombre, direccion = :direccion, telefono = :telefono, nit = :nit, iva = :iva
                      ");

      $this->db->bind(':nombre', $company['nombre']);
      $this->db->bind(':direccion', $company['direccion']);
      $this->db->bind(':telefono', $company['telefono']);
      $this->db->bind(':nit', $company['nit']);
      $this->db->bind(':iva', $company['iva']);

      if ($this->db->execute()) {
         return true;
      }else {
         return false;
      }
   }

}

 ?>
