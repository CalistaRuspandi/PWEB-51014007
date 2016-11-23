<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halo extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Halo Dunia');
		$this->load->view('Halo Calista');
	}
}
