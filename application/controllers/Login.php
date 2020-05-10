<?php 
/**
* 
*/
class Login extends CI_CONTROLLER
{
	
	public function index(){
		if($this->session->has_userdata('username')){
			redirect('/welcome','refresh');
		}
		else{$this->load->view('loginview');}
	}

}