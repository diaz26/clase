<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

  function __construct(){
    parent::__construct();
  }

  public function consultaUser($user,$contra){
    $sql="SELECT u.* FROM master_usuarios u WHERE (u.correo='$user' || u.USER='$user')
    AND u.contrasena='$contra'";
    $query=$this->db->query($sql);
    return $query->row();
  }
}
