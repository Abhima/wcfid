<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Home extends MY_Controller 
	{
		public function __construct()
		{
		    parent::__construct();
		    $this->load->helper('url');
		    $this->load->helper('form');
		    // Session
		    $this->load->library('session');
		}
		public function index()
	    {
	        $this->load->view('home/home');

	    }

	    public function magazines()
	  	{
	  		$this->load->view('home/magazines');
	  	}

	    public function email_availibility()
	    {
	      $this->load->view('home/registration', $data);
	    }

	    public function check_email_avalibility()  
	    {  
	      if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
	      {  
	        echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
	      }  
	      else  
	      {  
	        $this->load->model("homemodel");  
	        if($this->homemodel->is_email_available($_POST["email"]))  
	        {  
	          echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';  
	        }  
	        else  
	        {  
	          echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';  
	        }  
	      }  
	    }   

	    public function adduser()
	    {

	      $this->load->view('home/registration');

	      $SubmitUser = $this->input->post('SubmitUser');
	      if($SubmitUser)
	      {
	        $firstname = $this->input->post('firstname');
	        $middlename = $this->input->post('middlename');
	        $lastname = $this->input->post('lastname');
	        $email = $this->input->post('email');
	        $password = $this->input->post('password');

	        $data = array(
	        'firstname' => $firstname,
	        'middlename' => $middlename,
	        'lastname' => $lastname,
	        'email' => $email,
	        'password' => $password
	        );
	        
	        $this->load->model('homemodel');
	        $result = $this->homemodel->save($data);
	        if($result)
	        {
	          	$this->session->set_flashdata('success','Congrats! You have been Registered Succcessfully');
          		return redirect('home/adduser');
	        }
	        else
	        {
          		return redirect('home/adduser', 'refresh');
	        }
	      }
	    }
	}
?>