<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Model_interconsulta extends CI_Model{
    
  public function __construct() {
      parent::__construct();
  }

public function busca_rut($rut){   
    $auth = base64_encode("sismaule:*JLNWW;[");
    $body='{ "RUT":"'.$rut.'" }';
    $header = array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Content-Length: ".strlen($body),
    "Authorization: Basic $auth"
    );
      $packet['method'] = "POST";
      $packet['header'] = implode("\r\n", $header);
      $packet['content'] = $body;

      $transmit_data = array('http' => $packet);
      $context = stream_context_create($transmit_data);

    if (!$data = @file_get_contents("http://10.7.196.98/SISMAULE/?accion=PACIENTEOBTENERDATOSBASICOSSEGUNRUT", false, $context)) {
    $error = error_get_last();
    echo "HTTP request failed. Error was: " . $error['message'];
    } else {
      // echo "<----***PASO 1*** Recuperacion datos entregados por REST ";
      //***************************************************************************************************************************************************************
      //*** Inicio Recuperacion datos entregados por REST
      $json = json_decode($data);
      $datos = $json->respuesta->datos; 
      return $datos;
    }
  }

  //*** Buscar medicos
  public function getmedicos($q){
    $salud_pub_est = '100';
    $salud_pub_subest = '1001';
    $auth = base64_encode("sismaule:*JLNWW;[");
    $body='{ "ESTABLECIMIENTO":"'.$salud_pub_est.'",
             "SUBESTABLECIMIENTO":"'.$salud_pub_subest.'",
             "CADENA":"'.$q.'"}';
    $header = array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Content-Length: ".strlen($body),
    "Authorization: Basic $auth",
    );
      $packet['method'] = "POST";
      $packet['header'] = implode("\r\n", $header);
      $packet['content'] = $body;

      $transmit_data = array('http' => $packet);
      $context = stream_context_create($transmit_data);

    if (!$data = @file_get_contents("http://10.7.196.98/SISMAULE/?accion=OBTIENEPROFESIONALESMEDICOS", false, $context)) {
    $error = error_get_last();
    echo "HTTP request failed. Error was: " . $error['message'];
    } else {
        //echo "<----***PASO 1*** Recuperacion datos entregados por REST ";
    //***************************************************************************************************************************************************************
    //*** Inicio Recuperacion datos entregados por REST
    $json = json_decode($data);
    $datos = $json->respuesta->datos;
    $ii2=0;
    for ($i = 0; $i <count($datos); $i++) {
      $profe_apepat[$ii2] = $json->respuesta->datos[$i]->PROFE_COD.' - '.$json->respuesta->datos[$i]->PROFE_APEPAT.' '.$json->respuesta->datos[$i]->PROFE_APEMAT.' '.$json->respuesta->datos[$i]->PROFE_NOMBRES;
      $ii2++;
    }
    return $profe_apepat;
    }
  }
}