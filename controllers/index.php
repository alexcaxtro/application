<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

class index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("model_paciente");
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
        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre'); 
        $edad = $this->input->post('edad');
        $diagnostico = $this->input->post('diagnostico');
        $hospital = $this->input->post('hospital');
        
        $graba = $this->model_paciente->insertar($id, $nombre, $edad, $diagnostico, $hospital);
        redirect("/index/listar_paciente/");
    }
    
}

