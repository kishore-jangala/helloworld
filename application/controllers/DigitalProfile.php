<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DigitalProfile extends CI_Controller {
	public function index()
	{
		$this->load->view('innerHeader');
        $this->load->view('digitalProfile/digitalProfileBanner');
        $this->load->view('digitalProfile/businessMaps');
        $this->load->view('digitalProfile/listing');
        $this->load->view('digitalProfile/getStarted');
        $this->load->view('digitalProfile/resources');
		$this->load->view('footer');
	}
}
