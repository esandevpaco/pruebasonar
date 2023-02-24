<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function addtestvocacional($id,$nombre,$paterno,$materno,$correo,$telefono)
    {
        $sql ="INSERT INTO leads(id,date_entered,date_modified,modified_user_id,created_by,
        deleted,assigned_user_id,first_name,last_name,phone_mobile,phone_work,status)
        VALUES('".$id."',NOW(),NOW(),1,1,0,1,'".$nombre."','".$paterno."','".$telefono."','".$telefono."','New')";
        $query =  $this->db->query($sql);

        $sql2 ="INSERT INTO leads_cstm(id_c,inte_text_amaterno_c,inte_cbox_canal_c,inte_cbox_estado_c)
        VALUES('".$id."','".$materno."',764,'inte_cbox_estado_list_nuevo')";
        $this->db->query($sql2);

        $sql3 =" INSERT INTO email_addresses(id,email_address,email_address_caps,
        date_created,date_modified,deleted) VALUES('".$id."','".$correo."','".$correo."',NOW(),NOW(),0)";
        $this->db->query($sql3);

       

        return $query;
    }

}

/* End of file ModelName.php */
