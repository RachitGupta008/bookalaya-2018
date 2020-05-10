	<?php
	/**
	* 
	*/
	class Validatemodel extends CI_Model
	{
		
		public function validateuser($username){
	$this->load->database();
			$query = $this->db->get_where('users',['username'=>$username]);
			
			if($query->num_rows()>0){
	          return false;
			}
			else{
				return true;
			}
		}
	   public function createuser($name,$contact,$semester,$college,$branch,$username,$password){

$data = array(
	'name' => $name,
	'sem'=> $semester,
	'branch'=> $branch,
	'college'=> $college,
	'contact'=> $contact,
	'username'=> $username,
	'password'=> $password
);

            $this->load->database();
			$this->db->insert('users', $data);
			return true;
	   }
	public function checkuser($username,$password){
		$this->load->database();
		$query = $this->db->get_where('users',['username'=>$username,'password'=>$password]);

		if($query->num_rows()==1){
	          return true;
			}
			else{
				return false;
			}
		
	}
	}