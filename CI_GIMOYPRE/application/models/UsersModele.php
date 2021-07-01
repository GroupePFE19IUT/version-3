<?php
class UsersModele extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database("db");
  }

  public  function  insertion($data){
    $this->db->insert('Users', $data);
    $this->db->reset_query();
  }

  public function lister()
  {
    $query=$this->db->select('*')
                          ->from('Users')
                          ->where("statutUS= actif")
                          ->get();
                    return $query->result_array();
  }
}


 ?>
