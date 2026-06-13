<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Demo extends CI_Controller {

    public function index()
    {
        $data = [
            'title' => 'Catalogo 1830 - Azure Demo',
            'status' => 'RUNNING ON AZURE APP SERVICE (DOCKER)',
            'mode' => 'DEMO WITHOUT DATABASE'
        ];

        $this->load->view('demo_view', $data);
    }
}