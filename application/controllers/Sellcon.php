<?php
class Sellcon extends CI_Controller {
public function index(){
	$this->load->model('sellmode');
	$this->load->view('sellview');
}
public function search(){
	$this->load->model('sellmode');
	$k = $this->sellmode->getContent();
print $k;
}
public function searchcontent(){
	$subject = $this->input->post('subject');
	$this->load->model('sellmode');
	if($subject==""){$k="no content to show please refine ur search";}
		else
	{$k = $this->sellmode->getContentwithsubject($subject);}
	print $k;
}
}