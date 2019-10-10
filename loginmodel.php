<?php 
	/**
	* 
	*/
	class Loginmodel extends CI_Model
	{

		public function login_valid($email, $password)
		{
			//SELECT * FROM user_registered WHERE email = '$email' AND password = '$password'
			$this -> db -> select('*');
	      	$this -> db -> from('user_registered');
	      	$this -> db -> where('email', $email);
	      	$this -> db -> where('password', $password);
	     
	      	$q = $this -> db -> get();
	     
	      	if( $q->num_rows() )
	      	{
	        	return $q->row()->id;
	     	}
	      	else
	      	{
	        	return false;
	      	}
		}

	}
?>