<?php

class Unsermode extends CI_Model
{
	public function kak(){
		$this->load->database();
		$res = $this->db->query("SELECT * FROM name");

		$res = $res->result_array();

		$htmlbuilder='';
		for($i=0;$i<2;$i++)
		{
			$htmlbuilder = $htmlbuilder.'<option value="'.$res[$i]["name"].'" >
			'.$res[$i]["name"].'</option>';
		}
		return($htmlbuilder);
	}
	public function getsub($sem,$branch){
		$this->load->database();
		$sql = "SELECT subject FROM subject WHERE sem=? AND branch=?";
		$res = $this->db->query($sql,array($sem,$branch));
		$k = $res->result_array();
		$htmlbuilder="";
		for($i=0;$i<$res->num_rows();$i++)
		{
			$htmlbuilder = $htmlbuilder.'<option value="'.$k[$i]["booksub"].'" >
			'.$k[$i]["booksub"].'</option>';
		}
		return $htmlbuilder;
	}
	public function postbook($name,$contact,$semester,$subject,$title,$college,$nego,$branch,$price){
		$this->load->database();

		$sql = "INSERT INTO `sellbooks`(`name`,`contact`, `semester`, `subject`, `title`, `college`, `nego`, `branch`, `price`) VALUES ('".$name."',
		'".$contact."','".$semester."','".$subject."','".$title."','".$college."',".$nego.",'".$branch."','".$price."')";
		if(!$this->db->query($sql))
		{
			$error = $this->db->error();
			return $error;
		}
		else
		{
			return "congo";
		}
		
	}
}