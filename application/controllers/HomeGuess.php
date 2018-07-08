<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeGuess extends CI_Controller {

	// public function __construct()
	// {
	// 	// parent::__construct();
	// 	// if($this->session->userdata('logged_in') == null){
	// 	// 	redirect('Login','refresh');
	// 	// }
	// }
	public function index()
	{
		$this->load->view('homeGuess.php');
		// $x['data']=$this->m_berita->get_all_berita();
	}
	
}
