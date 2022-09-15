<?php


class Post extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('PostModel');
        $this->load->library('session');
        if (!$this->ion_auth->logged_in()){redirect('login', 'refresh');}
        if (!$this->ion_auth->is_admin()){redirect('/', 'refresh');}

    }
    public function managePost() { 
        $data =[
            'posts' => $this->PostModel->getAll(),
            'view' => 'admin/post/manage-post',
            'title' => 'Manage Post',

        ];
        
        $this->load->view('layout/admin', $data);
    }
    public function addPost() {
        $data =[
            'title' => 'Add Post',
            'view' => 'admin/post/add-post'

        ];
        
        $this->load->view('layout/admin', $data);
    }
    
    public function addPostPost() {
        $data['title'] = $this->input->post('title');
        $data['body'] = $this->input->post('body');
        if ($_FILES['image']['name']) { 
                $data['image'] = $this->doUpload('image');
            } 
            $data['type'] = $this->input->post('type');
        $data['is_visible'] = $this->input->post('is_visible');
        $to_slug = $this->input->post('title').'-'.rand(1,100).'-'.date('Y-m-d H:i:s');
        $data['slug'] = url_title($to_slug, 'dash', TRUE);
        $this->PostModel->insert($data);
            $this->session->set_flashdata('success', 'Post added Successfully');
            redirect('manage-post');
        }
    
    public function editPost($post_id) {
        // $data['post'] = $this->PostModel->getDataById($post_id);
        $data =[
            'post' => $this->PostModel->getDataById($post_id),
            'post_id' => $post_id,
            'title' => 'Edit Post',
            'view' => 'admin/post/edit-post'

        ];
        $this->load->view('layout/admin', $data);
    }
    
    public function editPostPost() {
        $post_id = $this->input->post('post_id');
        $post = $this->PostModel->getDataById($post_id);
        $data['title'] = $this->input->post('title');
        $data['body'] = $this->input->post('body');
        if ($_FILES['image']['name']) { 
                    $data['image'] = $this->doUpload('image');
                    unlink('./assets/uploads/postadmin//'.$post[0]->image);
                } 
                    $data['type'] = $this->input->post('type');
                $data['is_visible'] = $this->input->post('is_visible');
            $edit = $this->PostModel->update($post_id,$data);
                if ($edit) {
                    $this->session->set_flashdata('success', 'Post Updated');
                    redirect('manage-post');
                }
            }
    
    public function viewPost($post_id) {
        $data =[
            'post' => $this->PostModel->getDataById($post_id),
            'post_id' => $post_id,
            'title' => 'View Post',
            'view' => 'admin/post/view-post'

        ];
        $this->load->view('layout/admin', $data);
    }
    
    public function deletePost($post_id) {
        $delete = $this->PostModel->delete($post_id);
        $this->session->set_flashdata('success', 'post deleted');
        redirect('manage-post');
    }
    
    public function changeStatusPost($post_id) {
        $edit = $this->PostModel->changeStatus($post_id);
        $this->session->set_flashdata('success', 'post '.$edit.' Successfully');
        redirect('manage-post');
    }
       
    function doUpload($file) {
        $config['upload_path'] = './assets/uploads/post';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload($file))
            {
              $error = array('error' => $this->upload->display_errors());
              $this->load->view('upload_form', $error);
            }
            else
            {
              $data = array('upload_data' => $this->upload->data());
              return $data['upload_data']['file_name'];
            }
        }
    
}
