<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
		 $this->load->view('contactUs/contactBanner');
		 $this->load->view('home/getInTouch');
		$this->load->view('footer');      
    }
}
