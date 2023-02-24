<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();   
        $this->load->model('api_model');
          
    }
    
    public function index()
    {
        echo json_encode(true);
    }

//APIREST TESTVOCACINAL
 public function testvocacional(){

        $json = file_get_contents('php://input');
        $data = json_decode($json); 
        // echo json_encode($data->key);
 
  
        if(___KEYTESTVOCACIONAL___==$data->key){

            $id       = $this->create_guid(); 
            $nombre   = $data->nombre;
            $paterno  = $data->paterno;
            $materno  = $data->materno;
            $correo   = $data->correo;
            $telefono = $data->telefono;
     
            $response = $this->api_model->addtestvocacional($id,$nombre,$paterno,$materno,$correo,$telefono);
            if($response === TRUE){
                echo json_encode(array('status' => 'success'));            
            }else{
                echo json_encode(array('status' => 'failed'));
            }
      }else{
            
            echo json_encode(array('key' => 'invalid'));
      }

}

 //APIREST OPENDAY
 public function openday(){

        $json = file_get_contents('php://input');
        $data = json_decode($json); 
        // echo json_encode($data->key);


        if(___KEYTESTVOCACIONAL___==$data->key){

            $id       = $this->create_guid(); 
            $nombre   = $data->nombre;
            $paterno  = $data->paterno;
            $materno  = $data->materno;
            $correo   = $data->correo;
            $telefono = $data->telefono;
    
            $response = $this->api_model->addtestvocacional();
            if($response === TRUE){
                echo json_encode(array('status' => 'success'));            
            }else{
                echo json_encode(array('status' => 'failed'));
            }
    }else{
            
            echo json_encode(array('key' => 'invalid'));
    }

 }

 //APIREST COMUNICATE
 public function comunicate(){

       $json = file_get_contents('php://input');
        $data = json_decode($json); 
        // echo json_encode($data->key);


        if(___KEYTESTVOCACIONAL___==$data->key){

            $id       = $this->create_guid(); 
            $nombre   = $data->nombre;
            $paterno  = $data->paterno;
            $materno  = $data->materno;
            $correo   = $data->correo;
            $telefono = $data->telefono;

            $response = $this->api_model->addtestvocacional();
            if($response === TRUE){
                echo json_encode(array('status' => 'success'));            
            }else{
                echo json_encode(array('status' => 'failed'));
            }
    }else{
            
            echo json_encode(array('key' => 'invalid'));
    }
}

 //APIREST CHARLA
 public function charla(){

        $json = file_get_contents('php://input');
        $data = json_decode($json); 
        // echo json_encode($data->key);


        if(___KEYTESTVOCACIONAL___==$data->key){

            $id       = $this->create_guid(); 
            $nombre   = $data->nombre;
            $paterno  = $data->paterno;
            $materno  = $data->materno;
            $correo   = $data->correo;
            $telefono = $data->telefono;

            $response = $this->api_model->addtestvocacional();
            if($response === TRUE){
                echo json_encode(array('status' => 'success'));            
            }else{
                echo json_encode(array('status' => 'failed'));
            }
    }else{
            
            echo json_encode(array('key' => 'invalid'));
    }
}

 //APIREST WEBINAR
 public function webinar(){

            $json = file_get_contents('php://input');
            $data = json_decode($json); 
            // echo json_encode($data->key);


            if(___KEYTESTVOCACIONAL___==$data->key){

                $id       = $this->create_guid(); 
                $nombre   = $data->nombre;
                $paterno  = $data->paterno;
                $materno  = $data->materno;
                $correo   = $data->correo;
                $telefono = $data->telefono;

                $response = $this->api_model->addtestvocacional();
                if($response === TRUE){
                    echo json_encode(array('status' => 'success'));            
                }else{
                    echo json_encode(array('status' => 'failed'));
                }
        }else{
                
                echo json_encode(array('key' => 'invalid'));
        }
}


 //GENERADOR DE ID
public function create_guid()
{
    $microTime = microtime();
    list($a_dec, $a_sec) = explode(' ', $microTime);

    $dec_hex = dechex($a_dec * 1000000);
    $sec_hex = dechex($a_sec);

    $this->ensure_length($dec_hex, 5);
    $this->ensure_length($sec_hex, 6);

    $guid = '';
    $guid .= $dec_hex;
    $guid .= $this->create_guid_section(3);
    $guid .= '-';
    $guid .= $this->create_guid_section(4);
    $guid .= '-';
    $guid .= $this->create_guid_section(4);
    $guid .= '-';
    $guid .= $this->create_guid_section(4);
    $guid .= '-';
    $guid .= $sec_hex;
    $guid .= $this->create_guid_section(6);

    return $guid;
}

public  function create_guid_section($characters)
{
    $return = '';
    for ($i = 0; $i < $characters; ++$i) {
        $return .= dechex(mt_rand(0, 15));
    }

    return $return;
}

public  function ensure_length(&$string, $length)
{
    $strlen = strlen($string);
    if ($strlen < $length) {
        $string = str_pad($string, $length, '0');
    } elseif ($strlen > $length) {
        $string = substr($string, 0, $length);
    }
}

}

/* End of file Api.php */
