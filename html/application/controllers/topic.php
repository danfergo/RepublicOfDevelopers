<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends CI_Controller {

	public function index()
	{
		$topic['title'] = "Organização de código";
		$topic['category'] = "Java";
		$topic['autor'] = "Fernando Pinto";
		$topic['text'] = "Estou a fazer um jogo em java e não consigo decidir como organizar o código, qual é a melhor maneira ? De momento isto é o que tenho<br><pre>System.out.println('Start the game !'');<br>GameManager.begin();<br>if(GameManager.success()){<br> &#8194 GameManager.win();<br>};</pre>";
		
		$this->load->view('header_view');
		$this->load->view('topic_view', $topic);
	}
}

/* End of file profile.php */
/* Location: ./application/controllers/profile.php */