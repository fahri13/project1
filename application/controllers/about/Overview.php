<?php

class Overview extends CI_Controller {
		public function _construct()
		{
			parent::_construct();
		}
	
	public function index()
	{
		
		$this->load->view('templates/header');
		$this->load->view("about/overview");
		$this->load->view('templates/footer');
	}
	}