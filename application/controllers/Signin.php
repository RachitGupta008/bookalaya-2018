<?php
/**
* 
*/
class Signin extends CI_Controller
{
	public function index(){
	$this->load->view('signview');
}
public function validate(){
$this->load->model('validatemodel');
$username=$this->input->post('username');
if($this->validatemodel->validateuser($username)==false)
{
	echo "Username already exist";
}
else
{

		$contact= $this->input->post('contact');
		$name = $this->input->post('name');
		$semester= $this->input->post('semester');
		$college= $this->input->post('college');
		$branch= $this->input->post('branch');
		$username = $this->input->post('username');
		$password =$this->input->post('password');
		
		
	if($this->validatemodel->createuser($name,$contact,$semester,$college,$branch,$username,$password))
	{
		echo "account successfully created";
	}
	else
	{
		echo "problem";
	}
}

}
}