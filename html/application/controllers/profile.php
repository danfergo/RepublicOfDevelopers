<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('profile_view');
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */