<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class User extends MY_Controller 
	{
		public function __construct()
	    {
	      	parent::__construct();

	      	//session check using user id
	      	if (! $this->session->userdata('user_id'))
	      		return redirect('login');

	    }

		public function dashboard()
		{
	      	
	      	$this->load->model('quizmodel');
		    //loads value from quizmodel, getQuestions function to 'questions' variable
		    $this->load->model('quizmodel', 'questions');
	      	$questions = $this->quizmodel->getQuestions1();
	      	$this->load->view('user/dashboard', ['questions'=>$questions]);
		}

		public function resultdisplay1()
		{
			//assigns ques values into 'checks' array.
			$this->data['checks'] = array(
				//post selectedID value into 'ques' variable.
			     'ques1' => $this->input->post('selected_ID1'),
			);
			$this->load->model('quizmodel');
			//loads value from quizmodel, getQuestions function to 'results' variable.
			$this->data['results'] = $this->quizmodel->getQuestions1();
			//send $this->data value into result_display view
			$this->load->view('user/result_display1', $this->data);
		}


		public function quiz2()
		{
	      	$this->load->model('quizmodel');
		    //loads value from quizmodel, getQuestions function to 'questions' variable
		    $this->load->model('quizmodel', 'questions2');
	      	$questions2 = $this->quizmodel->getQuestions2();
	      	$this->load->view('user/quiz2', ['questions2'=>$questions2]);
		}

		public function resultdisplay2()
		{
			//assigns ques values into 'checks' array.
			$this->data['checks'] = array(
				//post selectedID value into 'ques' variable.			     
			     'ques2' => $this->input->post('selected_ID2'),
			);
			$this->load->model('quizmodel');
			//loads value from quizmodel, getQuestions function to 'results' variable.
			$this->data['results'] = $this->quizmodel->getQuestions2();
			
			//send $this->data value into result_display view
			$this->load->view('user/result_display2', $this->data);
		}
		
		public function quiz3()
		{
	      	$this->load->model('quizmodel');
		    //loads value from quizmodel, getQuestions function to 'questions' variable
		    $this->load->model('quizmodel', 'questions3');
	      	$questions3 = $this->quizmodel->getQuestions3();
	      	$this->load->view('user/quiz3', ['questions3'=>$questions3]);
		}

		public function resultdisplay3()
		{
			//assigns ques values into 'checks' array.
			$this->data['checks'] = array(
				//post selectedID value into 'ques' variable.
			     'ques3' => $this->input->post('selected_ID3'),
			);
			$this->load->model('quizmodel');
			//loads value from quizmodel, getQuestions function to 'results' variable.
			$this->data['results'] = $this->quizmodel->getQuestions3();
			//send $this->data value into result_display view
			$this->load->view('user/result_display3', $this->data);
		}
		
		public function quiz4()
		{
	      	
	      	$this->load->model('quizmodel');
		    //loads value from quizmodel, getQuestions function to 'questions' variable
		    $this->load->model('quizmodel', 'questions4');
	      	$questions4 = $this->quizmodel->getQuestions4();
	      	$this->load->view('user/quiz4', ['questions4'=>$questions4]);
		}

		public function resultdisplay4()
		{
			//assigns ques values into 'checks' array.
			$this->data['checks'] = array(
				//post selectedID value into 'ques' variable.
			     'ques4' => $this->input->post('selected_ID4'),
			);
			$this->load->model('quizmodel');
			//loads value from quizmodel, getQuestions function to 'results' variable.
			$this->data['results'] = $this->quizmodel->getQuestions4();
			//send $this->data value into result_display view
			$this->load->view('user/result_display4', $this->data);
		}

		public function quiz5()
		{
	      	
	      	$this->load->model('quizmodel');
		    //loads value from quizmodel, getQuestions function to 'questions' variable
		    $this->load->model('quizmodel', 'questions5');
	      	$questions5 = $this->quizmodel->getQuestions5();
	      	$this->load->view('user/quiz5', ['questions5'=>$questions5]);
		}

		public function resultdisplay5()
		{
			//assigns ques values into 'checks' array.
			$this->data['checks'] = array(
				//post selectedID value into 'ques' variable.
			     'ques5' => $this->input->post('selected_ID5'),
			);
			$this->load->model('quizmodel');
			//loads value from quizmodel, getQuestions function to 'results' variable.
			$this->data['results'] = $this->quizmodel->getQuestions5();
			//send $this->data value into result_display view
			$this->load->view('user/result_display5', $this->data);
		}


		public function quiz6()
		{
	      	
	      	$this->load->model('quizmodel');
		    //loads value from quizmodel, getQuestions function to 'questions' variable
		    $this->load->model('quizmodel', 'questions6');
	      	$questions6 = $this->quizmodel->getQuestions6();
	      	$this->load->view('user/quiz6', ['questions6'=>$questions6]);
		}

		public function resultdisplay6()
		{
			//assigns ques values into 'checks' array.
			$this->data['checks'] = array(
				//post selectedID value into 'ques' variable.
			     'ques6' => $this->input->post('selected_ID6'),
			);
			$this->load->model('quizmodel');
			//loads value from quizmodel, getQuestions function to 'results' variable.
			$this->data['results'] = $this->quizmodel->getQuestions6();
			//send $this->data value into result_display view
			$this->load->view('user/result_display6', $this->data);
		}

		/*public function resultdisplay()
		{
			//assigns ques values into 'checks' array.
			$this->data['checks'] = array(
				//post selectedID value into 'ques' variable.
			     'ques1' => $this->input->post('selected_ID1'),
			     'ques2' => $this->input->post('selected_ID2'),
			     'ques3' => $this->input->post('selected_ID3'),
			     'ques4' => $this->input->post('selected_ID4'),
			     'ques5' => $this->input->post('selected_ID5'),
			     'ques6' => $this->input->post('selected_ID6'),
			);
			$this->load->model('quizmodel');
			//loads value from quizmodel, getQuestions function to 'results' variable.
			$this->data['results'] = $this->quizmodel->getQuestions();
			//send $this->data value into result_display view
			$this->load->view('user/result_display', $this->data);
		}*/

		public function addscore()
		{
	      	$action = $this->input->post('action');
		    if ($action == 'submit') 
		    {
		      	//execute code after submit
		      	$this->load->model('quizmodel');
		      	//loads value from quizmodel, getQuestions function to 'questions' variable
		      	$this->load->model('quizmodel', 'questions');
	      		$questions = $this->quizmodel->getQuestions1();
	      		$this->load->view('user/dashboard', ['questions'=>$questions]);
	      	}
	      	if ($action == 'saveScore') 
			{
			  	//save score into the database
				$score = $this->input->post('score');
				$userid = $this->input->post('userid');

				$this->load->model('quizmodel');
				$result = $this->quizmodel->saveScoredata($score, $userid);
				return redirect('user/displaylevel');
			}
		}

		public function displaylevel()
		{
			if ($this->session->userdata('user_id')) 
			{
				$email = $this->session->userdata('email'); 
				/*$this->load->model('quizmodel');
			    //loads value from quizmodel, getQuestions function to 'questions' variable
			    $this->load->model('quizmodel', 'checkscore');
		      	$checkscore = $this->quizmodel->getLevel($email);
		      	$this->load->view('user/begineers_view', ['checkscore'=>$checkscore]);*/
		      	$this->load->model('quizmodel');
				$this->load->model('quizmodel', 'checkscore');
		      	$checkscore = $this->quizmodel->getLevel($email);

		      	foreach ($checkscore as $row) 
		      	{
			      	if ($row->score <= 2) 
			      	{
			      		// if user scores less than or equals to 2 loads to begineers view page
			      		$this->load->view('user/begineers_view');
			      	}
			      	if ($row->score > 2 && $row->score <=4) 
			      	{
			      		// if user scores greater than 2 and is less than or equals to 4 loads to intermediate view page
			      		$this->load->view('user/intermediate_view');
			      	}
			      	if ($row->score >4 && $row->score <=6) 
			      	{
			      		// if user scores greater than 4 and is less than or equals to 6 loads to expert view page
			      		$this->load->view('user/expert_view');
			      	}
			    }
		      		
		    }
		}
	}
?>