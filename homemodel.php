<?php 
	/**
	* 
	*/
	class Homemodel extends CI_Model
	{
		public function is_email_available($email)
	    {
	      $this -> db -> where('email', $email);
	      $this -> db -> from('user_registered');

	      $query = $this->db->get();
	      
	      //SELECT * FROM user_registered WHERE EMAIL = '$EMAIL'
	      
	      if($query->num_rows() > 0)
	      {
	        return true;
	      }
	      else
	      {
	        return false;
	      }
	    }

	    public function save($data)
	    {
	      if($this->db->insert("user_registered",$data))
	      {
	        return true;
	      }
	      else
	      {
	        return false;
	      }
	    }
	}
?>