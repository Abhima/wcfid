<?php 
	/**
	* 
	*/
	class Quizmodel extends CI_Model
	{
		public function getQuestions()
		{
			//SELECT score FROM quiz
			$query = $this->db->query("SELECT * FROM quiz");
		   	return $query->result();
		      
		    $num_data_returned = $query->num_rows;
		      
		    if ($num_data_returned < 1) 
		    {
		        echo "There is no data in the database";
		        exit(); 
		    }
		}

		public function getQuestions1()
		{
			//SELECT score FROM quiz
			$query = $this->db->query("SELECT * FROM quiz where question_ID = 1");
		   	return $query->result();
		      
		    $num_data_returned = $query->num_rows;
		      
		    if ($num_data_returned < 1) 	
		    {
		        echo "There is no data in the database";
		        exit(); 
		    }
		}
		public function getQuestions2()
		{
			//SELECT score FROM quiz
			$query = $this->db->query("SELECT * FROM quiz where question_ID = 2");
		   	return $query->result();
		      
		    $num_data_returned = $query->num_rows;
		      
		    if ($num_data_returned < 1) 
		    {
		        echo "There is no data in the database";
		        exit(); 
		    }
		}

		public function getQuestions3()
		{
			//SELECT score FROM quiz
			$query = $this->db->query("SELECT * FROM quiz where question_ID = 3");
		   	return $query->result();
		      
		    $num_data_returned = $query->num_rows;
		      
		    if ($num_data_returned < 1) 
		    {
		        echo "There is no data in the database";
		        exit(); 
		    }
		}

		public function getQuestions4()
		{
			//SELECT score FROM quiz
			$query = $this->db->query("SELECT * FROM quiz where question_ID = 4");
		   	return $query->result();
		      
		    $num_data_returned = $query->num_rows;
		      
		    if ($num_data_returned < 1) 
		    {
		        echo "There is no data in the database";
		        exit(); 
		    }
		}

		public function getQuestions5()
		{
			//SELECT score FROM quiz
			$query = $this->db->query("SELECT * FROM quiz where question_ID = 5");
		   	return $query->result();
		      
		    $num_data_returned = $query->num_rows;
		      
		    if ($num_data_returned < 1) 
		    {
		        echo "There is no data in the database";
		        exit(); 
		    }
		}

		public function getQuestions6()
		{
			//SELECT score FROM quiz
			$query = $this->db->query("SELECT * FROM quiz where question_ID = 6");
		   	return $query->result();
		      
		    $num_data_returned = $query->num_rows;
		      
		    if ($num_data_returned < 1) 
		    {
		        echo "There is no data in the database";
		        exit(); 
		    }
		}

		public function saveScoredata($receivedscore, $id)
	    {
	    	//UPDATE score FROM user_registered WHERE email = '$id' SET score = '$receivedscore'
	    	$query = $this->db->query("UPDATE user_registered 
								  SET score = '$receivedscore'
								  WHERE email = '$id'");
	    }

	    public function getLevel($id)
	    {
	    	//SELECT score FROM user_registered WHERE email = '$id'
	    	$query = $this->db->query("SELECT score 
								  FROM user_registered
								  WHERE email = '$id'");
	    	return $query->result();
	    }

	}
?>