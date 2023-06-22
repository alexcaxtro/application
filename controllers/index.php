<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
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
        $this->load->view("header");
        $this->load->view("vista_token",$data);
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
}
?>
