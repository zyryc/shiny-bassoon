<?php
 class Users extends CI_Controller {
     // Constructor
     public function __construct()
     {
         parent::__construct();
         if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}
            $this->load->model('UserModel');
     }
     //index
     public function index()
     {
         $data=array(
             'title'=>'Welcome to CodeIgniter',
                'users'=>$this->UserModel->getAll(),
             'heading'=>'CodeIgniter',
             'message'=>'Hello World',
             'view'=>'admin/users/index'
         );
         $this->load->view('layout/admin',$data);
     }
     
 
 
 }
