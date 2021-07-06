<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index(){
		$this->load->model('premio_model');
		$premios=$this->premio_model->read();
		$datos=['premios'=>$premios];
		cargar($this,'principal',$datos);
	}
}


