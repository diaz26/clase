<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class respuesta extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('model_login');;
  }


	public function index()

	{
    $num1=$this->input->post('num1');
    $num2=$this->input->post('num2');

		echo $nu1+$num2;
    //$result['rta']=$num1+$num2;

		//$this->load->view('view_respuesta',$result);

	}
}
