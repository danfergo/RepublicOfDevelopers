<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('main_view');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */