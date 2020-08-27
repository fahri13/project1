<?php

class Overview extends CI_Controller {
		public function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			// load view home/overview.php
			$this->load->view("home/overview");
		}
}