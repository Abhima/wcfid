<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Login extends MY_Controller 
	{
		public function index()
		{
			if ($this->session->userdata('user_id')) 
	      		return redirect('user/dashboard');

			$this->load->view('home/user_login');
		}
		public function verifylogin()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('email', 'Email', 'required|trim');
			$this->form_validation->set_rules('password', 'Password', 'required');

			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

			if ( $this->form_validation->run()) 
			{
				//success
				$email= $this->input->post('email');
				$password= $this->input->post('password');

				$this->load->model('loginmodel');

				$login_id = $this->loginmodel->login_valid($email, $password);
				
				if ($login_id) 
				{
					//if valid, login user.
					$this->session->set_userdata('user_id', $login_id);
					$this->session->set_userdata('email', $email);
			
					return redirect('user/dashboard');
				}
				else
				{
					//authentication failed.
					$this->session->set_flashdata('error', 'Oh Snap! Login Failed. You should check in one of those fields below.'); 
					return redirect('login');
				}
			}
			else
			{
				//failed.
				$this->load->view('home/user_login');

			}
		}
		public function logout()
	     {
	        $this->session->unset_userdata('user_id');
	        return redirect('login'); 

	     }
	}
?>