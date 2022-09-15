<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	// Constructor
	public function __construct()
	{
		parent::__construct();
		$this->load->model('OrderModel');
	}

	public function index()
	{

        // if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}

		$data=array(
			'title'=>'Welcome to Codetutors',
			'heading'=>'Code tutors',
			'message'=>'Code tutors',
			'view'=>'home'
		);
		$this->load->view('layout/app',$data);
	}
	public function make_order(Type $var = null)
	{
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}

		$data = array(
			'title' => 'Make Order',
			'heading' => 'Make Order',
			'message' => 'Make Order',
			'view' => 'pages/make-order'
		);
		$this->load->view('layout/app', $data);
	}
	// save order
	public function save_order()
	{
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}

		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('subject', 'subject', 'required');
		$this->form_validation->set_rules('budget', 'budget', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('time', 'Time', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data = array(
				'title' => 'Make Order',
				'heading' => 'Make Order',
				'message' => 'Make Order',
				'view' => 'pages/make-order'
			);
			$this->load->view('layout/app', $data);
		}
		else
		{
			//current date
			$date = date('Y-m-d H:i:s');
			// random number
			$rand = rand(1,100);

			$word_first = $this->input->post('subject').$rand.$date;
			$date_form = $this->input->post('date');
			$time_form = $this->input->post('time');
			$deadline = $date_form.' '.$time_form;
			$new_date = date('Y-m-d H:i:s', strtotime($deadline));

			

			$data = array(
				'user_id' => $this->ion_auth->user()->row()->id,
				'files'=>$this->uploadFiles(),
				'details' => $this->input->post('description'),
				'subject' => $this->input->post('subject'),
				'slug' => url_title($word_first, 'dash', TRUE),
				'file_link' => ($this->input->post('file_link') == '') ? 'No file' : $this->input->post('file_link'),
				'status' => "0",
				'budget' => $this->input->post('budget'),
				'deadline' => $new_date,
			);
			$this->OrderModel->create_order($data);
			redirect('/my-orders');
		}
	}
	public function my_orders()
	{
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}

		$data = array(
			'orders' => $this->OrderModel->get_orders($this->ion_auth->user()->row()->id),
			'title' => 'My Orders',
			'heading' => 'My Orders',
			'message' => 'My Orders',
			'view' => 'pages/my-orders'
		);
		$this->load->view('layout/app', $data);
	}
	// view order
	public function view_order($slug)
	{
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}
		
		$data = array(
			'order' => $this->OrderModel->getAll($slug),
			'title' => 'View Order',
			'heading' => 'View Order',
			'message' => 'View Order',
			'view' => 'pages/view-order'
		);
		$this->load->view('layout/app', $data);
	}
	// edit_order
	public function edit_order($slug)
	{
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}

		$data = array(
			'order' => $this->OrderModel->getAll($slug),
			'title' => 'Edit Order',
			'heading' => 'Edit Order',
			'message' => 'Edit Order',
			'view' => 'pages/edit-order'
		);
		// separate date and time
		$date = date('Y-m-d', strtotime($data['order']['deadline']));
		$time = date('H:i', strtotime($data['order']['deadline']));
		$data['date'] = $date;
		$data['time'] = $time;
		// print_r($data);


		$this->load->view('layout/app', $data);
	}
	// update order
	public function update_order($slug)
	{
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}

		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('budget', 'budget', 'required');
		$this->form_validation->set_rules('date', 'Date', 'required');
		$this->form_validation->set_rules('time', 'Time', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$dat = array(
				'order' => $this->OrderModel->getAll($slug),
				'title' => 'Edit Order',
				'heading' => 'Edit Order',
				'message' => 'Edit Order',
				'view' => 'pages/edit-order',
			);
			// separate date and time
			$date = date('Y-m-d', strtotime($dat['order']['deadline']));
			$time = date('H:i', strtotime($dat['order']['deadline']));
			$dat['date'] = $date;
			$dat['time'] = $time;
			$this->load->view('layout/app', $dat);
		}
		else
		{
			//current date
			$date = date('Y-m-d H:i:s');
			// random number
			$rand = rand(1,100);

			$word_first = $this->input->post('subject').$rand.$date;
			$date_form = $this->input->post('date');
			$time_form = $this->input->post('time');
			$deadline = $date_form.' '.$time_form;
			$new_date = date('Y-m-d H:i:s', strtotime($deadline));

			$data = array(
				'user_id' => $this->ion_auth->user()->row()->id,
				'details' => $this->input->post('description'),
				'file_link' => ($this->input->post('file_link') == '') ? 'No file' : $this->input->post('file_link'),
				'status' => "0",
				'budget' => $this->input->post('budget'),
				'deadline' => $new_date,
			);
			$this->OrderModel->update_order($data, $slug);

		}
		redirect('/my-orders');
	}
// delete_order
	public function delete_order($slug)
	{
		$this->OrderModel->delete_order($slug);
	}
	private function uploadFiles()
	{
		// upload multiple files
		
		$imagePath = realpath(APPPATH . '../assets/uploads');
		$config = array(
			'file_name' => time().uniqid(),
			'allowed_types' => 'jpg|jpeg|png|gif',
			'max_size' => 3000,
			'overwrite' => FALSE,
			'upload_path'=>$imagePath
			);
		// load upload class library
		$this->load->library('upload', $config);
		$fileNames = array();
		$number_of_files_uploaded = count($_FILES['files']['name']);
		for ($i = 0; $i < $number_of_files_uploaded; $i++) {
				$_FILES['file']['name'] = $_FILES['files']['name'][$i];
				$_FILES['file']['type'] = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['files']['error'][$i];
				$_FILES['file']['size'] = $_FILES['files']['size'][$i];
				
				//now we initialize the upload library
				$this->upload->initialize($config);
				if ($this->upload->do_upload('file')) {
					$fileData = $this->upload->data();
					$fileNames[] = $fileData['file_name'];
				}
		
		}
		// to json
		$fileNames = json_encode($fileNames);
		//to string
		// $fileNames = implode(',', $fileNames);
		return $fileNames;
	}
}
