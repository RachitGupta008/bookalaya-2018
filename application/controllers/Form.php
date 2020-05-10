	<?php
	class Form extends CI_Controller {

	        public function index()
	        {
	                
	if($this->session->has_userdata('username')){
				redirect('/welcome','refresh');
			}
			else{
	              $this->load->model("validatemodel");
		$username = $this->input->post('username');
			$password =$this->input->post('password');
		if($this->validatemodel->checkuser($username,$password))
		{
			
	     $this->session->set_userdata('username',$username);
	     redirect('/welcome','refresh');
	}
	else{
		$k['text']="username or password wrong/User doesnot exist";
	$this->load->view('loginview',$k);
	}
	}
	}
	}