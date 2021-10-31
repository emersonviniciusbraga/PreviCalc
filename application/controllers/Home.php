<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$dados['titulo'] = 'PreviCalc - Sua Calculadora da Previdência!';
		$this->load->view('inicio',$dados);
	}

	
}
