<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$user['name'] = "Fernando Pinto";
		$user['title'] = "Fundador da RoD";
		$user['profission'] = "Estudante";
		$user['local'] = "Porto";
		$user['age'] = "22";
		$user['hobbies'] = "Programar e jogar computador";
		$user['favorite_language'] = "Todas";

		$this->load->view('header_view');
		$this->load->view('profile_view', $user);
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */