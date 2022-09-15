<?php

class Basic extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
        
    }

	public function login()
	{
		$this->data['title'] = $this->lang->line('login_heading');
        $data['title'] = "Login";

		// validate form input
		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

		if ($this->form_validation->run() === TRUE)
		{
			// check to see if the user is logging in
			// check for "remember me"
			$remember = (bool)$this->input->post('remember');

			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('auth_success', $this->ion_auth->messages());
				redirect('/', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
				$this->session->set_flashdata('auth_error', $this->ion_auth->errors());
				redirect('login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = [
				'name' => 'identity',
				'id' => 'text-field-hero-input',
				'type' => 'text',
				'class'=>'mdc-text-field__input',
				'value' => $this->form_validation->set_value('identity'),
			];

			$this->data['password'] = [
				'name' => 'password',
				'id' => 'text-field-hero-input',
				'class' => 'mdc-text-field__input',
				'type' => 'password',
			];

			// $this->_render_page('auth' . DIRECTORY_SEPARATOR . 'login', $this->data);

		$this->data['view'] = "auth/login";
		$this->load->view('layout/main', $this->data);
		
		}
    }
	public function forgot_password()
	{
        $data['title'] = "Forgot Password";

		$this->data['title'] = $this->lang->line('forgot_password_heading');
		
		// setting validation rules by checking whether identity is username or email
		if ($this->config->item('identity', 'ion_auth') != 'email')
		{
			$this->form_validation->set_rules('identity', $this->lang->line('forgot_password_identity_label'), 'required');
		}
		else
		{
			$this->form_validation->set_rules('identity', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');
		}


		if ($this->form_validation->run() === FALSE)
		{
			$this->data['type'] = $this->config->item('identity', 'ion_auth');
			// setup the input
			$this->data['identity'] = [
				'name' => 'identity',
				'class'=>'mdc-text-field__input',
				'id' => 'identity',
			];

			if ($this->config->item('identity', 'ion_auth') != 'email')
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_identity_label');
			}
			else
			{
				$this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
			}

			// set any errors and display the form
			$this->data['auth_error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('auth_error');
			// $this->_render_page('auth' . DIRECTORY_SEPARATOR . 'forgot_password', $this->data);

		$this->data['view'] = "auth/forgot_password";
		$this->load->view('layout/main', $this->data);
		}
		else
		{
			$identity_column = $this->config->item('identity', 'ion_auth');
			$identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

			if (empty($identity))
			{

				if ($this->config->item('identity', 'ion_auth') != 'email')
				{
					$this->ion_auth->set_error('forgot_password_identity_not_found');
				}
				else
				{
					$this->ion_auth->set_error('forgot_password_email_not_found');
				}

				$this->session->set_flashdata('auth_error', $this->ion_auth->errors());
				redirect("forgot_password", 'refresh');
			}

			// run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

			if ($forgotten)
			{
				// if there were no errors
				$this->session->set_flashdata('auth_success', $this->ion_auth->messages());
				redirect("login", 'refresh'); //we should display a confirmation page here instead of the login page
			}
			else
			{
				$this->session->set_flashdata('auth_error', $this->ion_auth->errors());
				redirect("forgot_password", 'refresh');
			}
		}
	}
	public function register()
	{
        $data['title'] = "Register";

		$this->data['title'] = $this->lang->line('create_user_heading');

		// if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		// {
		// 	redirect('auth', 'refresh');
		// }

		$tables = $this->config->item('tables', 'ion_auth');
		$identity_column = $this->config->item('identity', 'ion_auth');
		$this->data['identity_column'] = $identity_column;

		// validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'trim|required');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'trim|required');
		if ($identity_column !== 'email')
		{
			$this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email');
		}
		else
		{
			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
		}
		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
		$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

		if ($this->form_validation->run() === TRUE)
		{
			$email = strtolower($this->input->post('email'));
			$identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
			$password = $this->input->post('password');
            $name=$this->input->post('first_name')." ".$this->input->post('last_name').time().uniqid();
            $unique_id = url_title(md5($name), 'dash', TRUE);
			$additional_data = [
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone'),
				'unique_id'=>$unique_id,
			];
		}
		if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data))
		{
			// check to see if we are creating the user
			// redirect them back to the admin page
			// $this->session->set_flashdata('success', $this->ion_auth->messages());
			$this->session->set_flashdata('auth_success', "check your email for activation");
			redirect("login", 'refresh');
		}
		else
		{
			// display the create user form
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = [
				'name' => 'first_name',
				'id' => 'first_name',
				'class'=>'mdc-text-field__input',
				'type' => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			];
			$this->data['last_name'] = [
				'name' => 'last_name',
				'id' => 'last_name',
				'class'=>'mdc-text-field__input',
				'type' => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			];
			$this->data['identity'] = [
				'name' => 'identity',
				'id' => 'identity',
				'class'=>'mdc-text-field__input',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			];
			$this->data['email'] = [
				'name' => 'email',
				'id' => 'email',
				'class'=>'mdc-text-field__input',
				'type' => 'text',
				'value' => $this->form_validation->set_value('email'),
			];
			$this->data['company'] = [
				'name' => 'company',
				'id' => 'company',
				'class'=>'mdc-text-field__input',
				'type' => 'text',
				'value' => $this->form_validation->set_value('company'),
			];
			$this->data['phone'] = [
				'name' => 'phone',
				'id' => 'phone',
				'class'=>'mdc-text-field__input',
				'type' => 'text',
				'value' => $this->form_validation->set_value('phone'),
			];
			$this->data['password'] = [
				'name' => 'password',
				'id' => 'password',
				'class'=>'mdc-text-field__input',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password'),
			];
			$this->data['password_confirm'] = [
				'name' => 'password_confirm',
				'id' => 'password_confirm',
				'class'=>'mdc-text-field__input',
				'type' => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
			];

			// $this->_render_page('auth' . DIRECTORY_SEPARATOR . 'create_user', $this->data);

			$this->data['view'] = "auth/register";
			$this->load->view('layout/main', $this->data);
		}


	}
	public function activate($id, $code = FALSE)
	{
		$activation = FALSE;

		if ($code !== FALSE)
		{
			$activation = $this->ion_auth->activate($id, $code);
		}
		else if ($this->ion_auth->is_admin())
		{
			$activation = $this->ion_auth->activate($id);
		}

		if ($activation)
		{
			// redirect them to the auth page
			$this->session->set_flashdata('auth_success', $this->ion_auth->messages());
			redirect("/", 'refresh');
		}
		else
		{
			// redirect them to the forgot password page
			$this->session->set_flashdata('auth_success', $this->ion_auth->errors());
			redirect("forgot_password", 'refresh');
		}
	}
	public function reset_password($code = NULL)
	{
		if ($code==null)
		{
			// print_r($code);
			show_404();
			// die;
		}

		$this->data['title'] = $this->lang->line('reset_password_heading');
		
		$user = $this->ion_auth->forgotten_password_check($code);

		if ($user)
		{
			// if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

			if ($this->form_validation->run() === FALSE)
			{
				// display the form

				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$this->data['new_password'] = [
					'name' => 'new',
					'id' => 'new',
					'class'=>'mdc-text-field__input',
					'type' => 'password',
					'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
				];
				$this->data['new_password_confirm'] = [
					'name' => 'new_confirm',
					'id' => 'new_confirm',
					'class'=>'mdc-text-field__input',
					'type' => 'password',
					'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
				];
				$this->data['user_id'] = [
					'name' => 'user_id',
					'id' => 'user_id',
					'class'=>'mdc-text-field__input',
					'type' => 'hidden',
					'value' => $user->id,
				];
				$this->data['csrf'] = $this->_get_csrf_nonce();
				$this->data['code'] = $code;

				// render
				// $this->_render_page('auth' . DIRECTORY_SEPARATOR . 'reset_password', $this->data);
		$this->data['view'] = "auth/reset_password";
		$this->load->view('layout/main', $this->data);
		
			}
			else
			{
				$identity = $user->{$this->config->item('identity', 'ion_auth')};

				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id'))
				{

					// something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($identity);

					show_error($this->lang->line('error_csrf'));

				}
				else
				{
					// finally change the password
					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change)
					{
						// if the password was successfully changed
						$this->session->set_flashdata('auth_errors', $this->ion_auth->messages());
						redirect("login", 'refresh');
					}
					else
					{
						$this->session->set_flashdata('auth_errors', $this->ion_auth->errors());
						redirect('reset_password/' . $code, 'refresh');
					}
				}
			}
		}
		else
		{
			// if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('auth_error', $this->ion_auth->errors());
			redirect("forgot_password", 'refresh');
		}
	}

    public function logout()
	{
		$this->data['title'] = "Logout";

		// log the user out
		$this->ion_auth->logout();

		// redirect them to the login page
		redirect('/', 'refresh');
	}
	public function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return [$key => $value];
	}

	/**
	 * @return bool Whether the posted CSRF token matches
	 */
	public function _valid_csrf_nonce(){
		$csrfkey = $this->input->post($this->session->flashdata('csrfkey'));
		if ($csrfkey && $csrfkey === $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
			return FALSE;
	}
}