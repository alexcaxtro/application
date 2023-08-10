<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

// Definir la clase paciente
class Model_paciente extends CI_Model {

      public function __construct() {
        parent::__construct();
    }  

    public function last_id_paciente(){
      $this->db->select("(MAX (ID_PACIENTE)+1) AS ID_PACIENTE");
      $this->db->from("SALUD.CU_PACIENTE");
      $query = $this->db->get();
      if($query->num_rows()>=1){
        return $query->result();
      }
    }

    public function listar_paciente() {
      $this->db->select("P.ID_PACIENTE AS ID_PACIENTE, P.NOMBRE AS NOMBRE, P.EDAD AS EDAD,  P.ESTADO_PACIENTE AS ESTADO_PACIENTE", false);
      $this->db->order_by('P.ID_PACIENTE', 'ASC');
      $this->db->from("SALUD.CU_PACIENTE P");
      $query = $this->db->get();
        if($query->num_rows() >= 1){    
          return $query->result();
        }
        else{
          return false;
        }    
    }
  
  public function insertar($id, $nombre, $edad, $hospital, $estado) {
      $this->db->set("ID_PACIENTE", $id);
      $this->db->set("NOMBRE", $nombre);
      $this->db->set("EDAD", $edad);
      $this->db->set("HOSPITAL", $hospital);
      $this->db->set("ESTADO_PACIENTE", $estado);
      $this->db->insert("SALUD.CU_PACIENTE");
      if($this->db->affected_rows() == 1){      
        return true;
        }
        else{
            return false;
        }   
  }
    public function borrar($id){

    $this->db->delete('SALUD.CU_PACIENTE', array('ID_PACIENTE' => $id));  
   }


public function ver_paciente($id) {
  $qry = $this->db->query(
    "SELECT 
      P.ID_PACIENTE AS ID,
      P.NOMBRE AS NOMBRE,
      P.EDAD AS EDAD,
      P.HOSPITAL AS HOSPITAL,
      P.ESTADO_PACIENTE AS ESTADO_PACIENTE
      FROM CU_PACIENTE P
      WHERE P.ID_PACIENTE=$id"
    );
  $result = $qry->result();
  return $result;
  }

public function update($id, $nombre, $edad, $hospital) {
  $this->db->set("ID_PACIENTE", $id);
  $this->db->set("NOMBRE", $nombre);
  $this->db->set("EDAD", $edad);
  $this->db->set("HOSPITAL", $hospital);
  $this->db->where('ID_PACIENTE', $id);
  $this->db->update("SALUD.CU_PACIENTE");
  if($this->db->affected_rows() == 1){      
    return true;
    }
    else{
        return false;
    }   
}

public function borrar_paciente($id, $estado) {
  $this->db->set("ESTADO_PACIENTE", $estado);
  $this->db->where('ID_PACIENTE', $id);
  $this->db->update("SALUD.CU_PACIENTE");
  if($this->db->affected_rows() == 1){      
    return true;
    }
    else{
        return false;
    }   
}

public function revivir_paciente($id, $estado) {
  $this->db->set("ESTADO_PACIENTE", $estado);
  $this->db->where('ID_PACIENTE', $id);
  $this->db->update("SALUD.CU_PACIENTE");
  if($this->db->affected_rows() == 1){      
    return true;
    }
    else{
        return false;
    }   
}

}
















