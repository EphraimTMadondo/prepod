<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Frest extends CI_Controller{
    public function index()
    {
        $this->load->view('frest/index.html');
    }
}