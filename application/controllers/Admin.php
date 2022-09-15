<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    // Constructor
    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}
        if (!$this->ion_auth->is_admin()){redirect('/', 'refresh');}


    }
    //index
    public function index()
    {
        $data=array(
            'title'=>'Welcome to CodeIgniter',
            'heading'=>'CodeIgniter',
            'message'=>'Hello World',
            'view'=>'admin/dashboard'
        );
        $this->load->view('layout/admin',$data);
    }


}
