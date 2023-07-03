<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

// Definir la clase paciente
class Model_paciente extends CI_Model {

      public function __construct() {
        parent::__construct();
    }  

  // Definir las propiedades
  // private $id;
  // private $nombre;
  // private $edad;
  // private $diagnostico;
  // private $hospital;

  // Definir el constructor
  // public function __construct($id, $nombre, $edad, $diagnostico, $hospital) {
    // // Llamar al constructor del modelo
    // parent::__construct();
    // // Asignar los valores a las propiedades
    // $this->id = $id;
    // $this->nombre = $nombre;
    // $this->edad = $edad;
    // $this->diagnostico = $diagnostico;
    // $this->hospital = $hospital;

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

  // Definir los métodos get y set para cada propiedad
   

  }

  // public function set_id($id) {
  //   $this->id = $id;
  // }

  // public function get_nombre() {
  //   return $this->nombre;
  // }

  // public function set_nombre($nombre) {
  //   $this->nombre = $nombre;
  // }

  // public function get_edad() {
  //   return $this->edad;
  // }

  // public function set_edad($edad) {
  //   $this->edad = $edad;
  // }

  // public function get_diagnostico() {
  //   return $this->diagnostico;
  // }

  // public function set_diagnostico($diagnostico) {
  //   $this->diagnostico = $diagnostico;
  // }

  // public function get_hospital() {
  //   return $this->hospital;
  // }

  // public function set_hospital($hospital) {
  //   $this->hospital = $hospital;
  // }

  // // Definir un método para insertar un paciente en la base de datos
  // public function insertar() {
  //   // Preparar el arreglo con los datos
  //   $data = array(
  //     "id" => $this->id,
  //     "nombre" => $this->nombre,
  //     "edad" => $this->edad,
  //     "diagnostico" => $this->diagnostico,
  //     "hospital" => $this->hospital
  //   );
  //   // Insertar el arreglo en la tabla pacientes
  //   return $this->db->insert("pacientes", $data);
  // }

  // // Definir un método para actualizar un paciente en la base de datos
  // public function actualizar() {
  //   // Preparar el arreglo con los datos
  //   $data = array(
  //     "nombre" => $this->nombre,
  //     "edad" => $this->edad,
  //     "diagnostico" => $this->diagnostico,
  //     "hospital" => $this->hospital
  //   );
  //   // Actualizar el arreglo en la tabla pacientes donde el id sea igual al de la instancia
  //   return $this->db->where("id", $this->id)->update("pacientes", $data);
  // }

  // // Definir un método para eliminar un paciente de la base de datos
  // public function eliminar() {
  //   // Eliminar el registro de la tabla pacientes donde el id sea igual al de la instancia
  //   return $this->db->where("id", $this->id)->delete("pacientes");
  // }


