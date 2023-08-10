<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

class index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("model_paciente");
        $this->load->model("model_interconsulta");
    }
    
    public function index(){
        $this->load->view("header");
        $this->load->view("vista_INICIO");
    }

   public function token() {
        $data= array(
                        'token'=> bin2hex(openssl_random_pseudo_bytes(16)), 
                        'fecha_de_sesion' => date("d-m-Y"),
                        'hora_de_sesion' => date("h:i:s"),
                    );
        $this->load->view('header');
        $this->load->view('vista_token',$data);
    } 

    public function listar_paciente() {
        $data["paciente"] = $this->model_paciente->listar_paciente();
        $this->load->view('header', $data);
        $this->load->view('vista_paciente_list');
    }

    public function autenticar(){
        $data= array(
                        'token'=> bin2hex(openssl_random_pseudo_bytes(16)), 
                        'fecha_de_sesion' => date("d-m-Y"),
                        'hora_de_sesion' => date("h:i:s"),
                    );
        $this->load->view("header");
        $this->load->view("vista_autenticar",$data);
    }
    
    public function crear_paciente() {
        $this->load->view('header');
        $this->load->view('vista_crear_paciente');
        
    } 

    public function guardar_paciente(){
        $buscar_last_id = $this->model_paciente->last_id_paciente();
        foreach($buscar_last_id as $id) {
            $data = $id->ID_PACIENTE;
        } 
        $id = intval($data);
        $nombre = $this->input->post('nombre'); 
        $edad = $this->input->post('edad');
        $hospital = $this->input->post('hospital');
        $estado = 1;
        $graba = $this->model_paciente->insertar($id, $nombre, $edad, $hospital, $estado);
        redirect("/index/listar_paciente/");
        
    }
    public function detalle_paciente($id){
        $buscar = $this->model_paciente->ver_paciente($id);
        if($buscar){
        $data["paciente"] = $this->model_paciente->ver_paciente($id);
        $this->load->view('header', $data);
        $this->load->view("vista_detalle_paciente");
    }

    }
    public function actualizar_paciente(){
         $id = $this->input->post('id');
         $nombre = $this->input->post('nombre'); 
         $edad = $this->input->post('edad');
         $hospital = $this->input->post('hospital');  
         $graba = $this->model_paciente->update($id, $nombre, $edad, $hospital);
         redirect("/index/listar_paciente/");
    }

    public function borrar(){
    $id = $this->input->get('id');
    $resultado = $this->model_paciente->get_paciente_by_id($id);
    if(count($resultado) > 0)
    {
        $this->model_paciente->borrar($id);
        $this->index();
    }
    }

    public function buscar_datos_paciente() {
        $fecha= array('fecha_de_inter' => date("d-m-Y"));
        $rut = $this->input->post('rut');
        $buscar = $this->model_interconsulta->busca_rut($rut);
        if($buscar){
        $data ["datos"] = $this->model_interconsulta->busca_rut($rut);
        $this->load->view('header', $data);
        $this->load->view('vista_interconsulta_inicio', $fecha);    
        }   
    }

    public function medicos(){
        if (isset($_GET['term'])){
        $q = $_GET['term'];
        $resultado = $this->model_biopsias->getmedicos($q);
        echo json_encode($resultado);
        }
    }

    public function borrar_paciente($id){
        $buscar = $this->model_paciente->ver_paciente($id);
        if($buscar){
        $data["paciente"] = $this->model_paciente->ver_paciente($id);
        $this->load->view('header', $data);
        $this->load->view('vista_eliminar_paciente');    
        }
    }
    public function eliminar_paciente(){
        $id = $this->input->post('id');
        $estado = 0;
        $buscar = $this->model_paciente->borrar_paciente($id, $estado);
         if($buscar){
        $data["paciente"] = $this->model_paciente->borrar_paciente($id, $estado);
        $this->load->view('header', $data);
        redirect("/index/listar_paciente/");
        }
    }

    public function respawn_paciente(){
        $data["paciente"] = $this->model_paciente->listar_paciente();
        $this->load->view('header', $data);
        $this->load->view('vista_respawn_paciente');  
    }


    public function revivir_paciente(){
        $id = $this->input->get('id');
        $estado = 1;
        $buscar = $this->model_paciente->revivir_paciente($id, $estado);
         if($buscar){
        $data["paciente"] = $this->model_paciente->revivir_paciente($id, $estado);
        $this->load->view('header', $data);
        redirect("/index/");
        }
    }


}

