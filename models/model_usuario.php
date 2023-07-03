<?php if(! defined('BASEPATH')) exit('No direct script access allowed');


class Model_usuario extends CI_Model{
    
//    public $db_b;
    
    public function __construct() {
        parent::__construct();
        
//        $this->db_b = $this->load->database('ssmaule', TRUE); 
    }
    
     public function verificar_usuario($usuario, $contrasena){  
        
        $this->db->select("U.USUARIO, U.NOM_PROF, U.APEPAT_PROF, U.APEMAT_PROF, U.RUT_PROF, U.COD_PROF, U.ID_USUARIO, T.DESCRIPCION, U.ID_TIPO_USU");
        $this->db->from("SALUD.RAYOS_USUARIO U, SALUD.RAYOS_TIPO_USUARIO T");
        $this->db->where("U.USUARIO",$usuario);   
        $this->db->where("U.CLAVE_USUARIO",$contrasena);   
        $this->db->where("U.ID_TIPO_USU = T.ID_TIPO_USU");  
        $query = $this->db->get();
        if($query->num_rows() >= 1){
          $resultado = $query->row();
          return json_encode($resultado);
        }
        else{
          return false;
        }
  
    }
    
    public function get_datos($id_usuario){
        $this->db->select("NOM_PROF AS NOMBRE, APEPAT_PROF AS APELLIDO_P, APEMAT_PROF AS APELLIDO_M, COD_PROF AS COD");
        $this->db->from("SALUD.RAYOS_USUARIO");
        $this->db->where("ID_USUARIO",$id_usuario);
        $query = $this->db->get();
        if($query->num_rows() >= 1){
            return $query->result();
        }
        else{
          return false;
        }       
    }
    
    }

?>
