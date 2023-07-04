<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

// Definir la clase paciente
class Model_paciente extends CI_Model {

      public function __construct() {
        parent::__construct();
    }  

 

    public function listar_paciente() {
      $this->db->select("P.NOMBRE AS NOMBRE, P.EDAD AS EDAD, P.DIAGNOSTICO AS DIAGNOSTICO", false);
      $this->db->from("SALUD.CU_PACIENTE P");
      $query = $this->db->get();
        if($query->num_rows() >= 1){    
          return $query->result();
        }
        else{
          return false;
        }    
    }
  


  public function insertar($id, $nombre, $edad, $diagnostico, $hospital) {
      $this->db->set("ID_PACIENTE", $id);
      $this->db->set("NOMBRE", $nombre);
      $this->db->set("EDAD", $edad);
      $this->db->set("DIAGNOSTICO", $diagnostico);
      $this->db->set("HOSPITAL", $hospital);
    // Insertar el arreglo en la tabla pacientes
      $this->db->insert("SALUD.CU_PACIENTE");
      if($this->db->affected_rows() == 1){      
        return true;
        }
        else{
            return false;
        }   
  }




}
















