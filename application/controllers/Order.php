<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    // Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OrderModel');
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}

    }

    // Index page
    public function index()
    {
        $data =[
            'orders' => $this->OrderModel->getAll(),
            'view' => 'pages/orders/my-orders',
            'title' => 'My Orders',

        ];
        $this->load->view('layout/app', $data);
    }

    // Create order
    public function create()
    {
        $this->form_validation->set_rules('user_id', 'User', 'required');
        $this->form_validation->set_rules('product_id', 'Product', 'required');
        $this->form_validation->set_rules('order_date', 'Order Date', 'required');
        $this->form_validation->set_rules('order_quantity', 'Order Quantity', 'required');
        $this->form_validation->set_rules('order_price', 'Order Price', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('order_view');
        }
        else
        {
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'product_id' => $this->input->post('product_id'),
                'order_date' => $this->input->post('order_date'),
                'order_quantity' => $this->input->post('order_quantity'),
                'order_price' => $this->input->post('order_price')
            );

            $this->Order_model->create_order($data);
            redirect('order/index');
        }
    }

}
