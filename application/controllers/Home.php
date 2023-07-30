<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('curl_model');
    }

    function index()
    {
        $data['title'] = "HELOO WORLD";
        $data['users'] = $this->curl_model->getUserInfo();
        $this->load->view("home_view", $data);
    }
}
