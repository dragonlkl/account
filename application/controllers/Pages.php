<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages  extends CI_Controller {
	public function view($page = 'home')
	{
		if(!file_exists(APPPATH.'views/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();	
		}

		$data['title'] = ucfirst($page);

		$this->load->view('header',$data);
		$this->load->view($page,$data);
		$this->load->view('footer',$data);
	}
}