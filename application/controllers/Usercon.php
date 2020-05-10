
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercon extends CI_Controller {

	public function index()
	{
		$this->load->model('unsermode');
		$data['title']=$this->unsermode->kak();
		$this->load->helper('form');
		$this->load->view('userview');
	}

	public function searchsub(){
		$sem = $this->input->post('sem');
		$branch = $this->input->post('branch');
		$this->load->model('unsermode');
		$data=$this->unsermode->getsub($sem,$branch);
		print $data ;

	}
	public function listings(){
		$nego = $this->input->post('nego');
		$contact= $this->input->post('contact');
		$name = $this->input->post('name');
		$semester= $this->input->post('semester');
		$subject= $this->input->post('subject');
		$college= $this->input->post('college');
		$branch= $this->input->post('branch');
		$title=$this->input->post('title');
		$price=$this->input->post('price');
		$this->load->model('unsermode');
		$k = $this->unsermode->postbook($name,$contact,$semester,$subject,$title,$college,$nego,$branch,$price);
		print_r($k); 
	}
}