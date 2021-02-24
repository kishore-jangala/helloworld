<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GetListed extends CI_Controller
{
    public function index()
    {
        $this->load->view('getListing/getListedHeader');
        $this->load->view('getListing/getListed');
        $this->load->view('getListing/banner');
        $this->load->view('getListing/localMarketing');
        $this->load->view('footer');
    }
}
