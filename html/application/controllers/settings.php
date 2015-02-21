<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('settings_view');
	}
}

/* End of file settings.php */
/* Location: ./application/controllers/settings.php */