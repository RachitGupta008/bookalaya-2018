<?php
class Welcomemod extends CI_Model{
	public function checklogin(){

if($this->session->has_userdata('username'))
	    	{
	    		$username = $this->session->userdata('username');
	         return ' 
                <li class="dropdown">
	         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$username.'<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Dashboard</a></li>
	            
	            <li class="divider"></li>
	            <li><a href="http://localhost/index.php/welcome/logout" >logout</a></li>
	           
	          </ul>
	        </li>';
	    	}
	    	else
	    		{ 
	    			return '<li><a href="http://localhost/index.php/login">login</a></li>
	        <li><a href="http://localhost/index.php/signin">Signup</a></li>';
	}
}
}