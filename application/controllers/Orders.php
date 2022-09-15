<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    // Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OrderModel');
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}
        // if is admin
        if (!$this->ion_auth->is_admin()){redirect('/', 'refresh');}
    }

    // Index page
    public function index()
    {
          $data =[
            'orders' => $this->OrderModel->getAll(),
            'view' => 'admin/orders/index',
            'title' => 'Manage Post',

        ];
        $this->load->view('layout/admin', $data);
    }
    public function view($id)
    {

        $data = [
            'order'=>$this->OrderModel->get_by_id($id),
            'title'=>"View Order",
            'view'=>'admin/orders/view'
            ];
        print_r($data);

        $this->load->view('layout/admin', $data);
    }
    public function cancel($id)
    {
        $this->OrderModel->cancel($id);
        redirect('orders');
    }

}
