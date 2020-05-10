<?php

class Sellmode extends CI_Model{
	public function getContent(){
		$this->load->database();
		$sql ="SELECT `name`, `contact`, `semester`, `subject`, `title`, `college`, `nego`, `branch`, `price`, `id` FROM `sellbooks` WHERE 1";
		$res = $this->db->query($sql);
	$k = $res->result_array();
	$htmlbuilder="";
	$divstart='<div class="row" >';
	$divend='</div>';
	$nego="";
	$modaldiv="";
	for($i=0;$i<$res->num_rows();$i++)
      {
        
      $htmlbuilder = $htmlbuilder.'<div class="col-sm-3"><div class="panel panel-default"> <div class="panel-body" ><div class="subject">'.$k[$i]["subject"].'</div><div class="title">by '.$k[$i]["title"].'</div><div class="price">'.$k[$i]["price"].'</div><div><button type="button" class="btn" data-toggle="modal" data-target="#'.$k[$i]["id"].'">Open Modal</button</div></div></div></div></div>';
      
      $modaldiv=$modaldiv.'<div id="'.$k[$i]["id"].'" class="modal fade" role="dialog"> <div class="modal-dialog">
      <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$k[$i]["subject"].'</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>';
      }
      

      $htmlbuilder=$divstart.$htmlbuilder.$modaldiv.$divend;
return $htmlbuilder;
}
public function getContentwithsubject($subject){
  $this->load->database();
  $sql = "SELECT * FROM `sellbooks` WHERE subject='".$subject."'";

  $res = $this->db->query($sql);
  $k = $res->result_array();
  $htmlbuilder="";
  $divstart='<div class="row" >';
  $divend='</div>';
  $nego="";
  $modaldiv="";
  for($i=0;$i<$res->num_rows();$i++)
      {
        
      $htmlbuilder = $htmlbuilder.'<div class="col-sm-3"><div class="panel panel-default"> <div class="panel-body" ><div class="subject">'.$k[$i]["subject"].'</div><div class="title">by '.$k[$i]["title"].'</div><div class="price">'.$k[$i]["price"].'</div><div><button type="button" class="btn" data-toggle="modal" data-target="#'.$k[$i]["id"].'">Open Modal</button</div></div></div></div></div>';
      
      $modaldiv=$modaldiv.'<div id="'.$k[$i]["id"].'" class="modal fade" role="dialog"> <div class="modal-dialog">
      <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$k[$i]["subject"].'</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>';
      }
      

      $htmlbuilder=$divstart.$htmlbuilder.$modaldiv.$divend;
return $htmlbuilder;
}
}
