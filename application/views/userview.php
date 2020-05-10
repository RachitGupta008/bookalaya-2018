<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
    var k = document.getElementById("sem");
    var l;
    function changes(){
     k = document.getElementById("sem").value;
     document.getElementById("selector").selected="selected";
     l=k;
     alert(document.getElementById("branch").value);
     }
     function changesub(i){

		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("subject").innerHTML = this.responseText;
            
            }
        };
        xmlhttp.open("POST","<?php echo base_url('usercon/searchsub'); ?> ", true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send('branch='+i+'&sem='+l);
   
    }

  
    
	function formPost(){

var nego =document.getElementById("nego").checked;
var contact = document.getElementById("contact").value;
var name = document.getElementById("name").value;
var semester = document.getElementById("sem").value;
var subject=document.getElementById("subject").value;
var college=document.getElementById("college").value;
var branch= document.getElementById("branch").value;
var title=document.getElementById("title").value;
var price=document.getElementById("price").value;
var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              alert(this.responseText);
            
            }
           
        };
        xmlhttp.open("POST","<?php echo base_url('usercon/listings'); ?> " , true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send(`name=`+name+`&contact=`+contact+`&semester=`+semester+`&subject=`+subject+`&title=`+title+`&college=`+college+`&nego=`+nego+`&branch=`+branch+`&price=`+price);
	}

</script>
</head>
<body>
<div class="container-fluid">

<form onsubmit="formPost();return false;" class="form-horizontal" >
<fieldset>
<legend>Post a book/novel</legend>
<div class="form-group">
      <label for="name" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="name" placeholder="Name" required>
      </div>
    </div>

<div class="form-group">
<label for="sem" class="col-lg-2 control-label">Semester</label>
 <div class="col-lg-10">
   <select id = "sem" class="form-control" onchange="changes()" required>
	    <option value="select">select....</option >
	    <option value="1">1st sem</option >
	    <option value="2">2nd sem</option >
	    <option value="3">3rd sem</option >
	    <option value="4">4th sem</option >
	    <option value="5">5th sem</option >
	    <option value="6">6th sem</option >
	    <option value="7">7th sem</option >
	    <option value="8">8th sem</option >
	</select>
 </div>
 </div>
<div class="form-group">
<label for="branch" class="col-lg-2 control-label">Branch</label>
 <div class="col-lg-10">

	<select id="branch" class="form-control" onchange="changesub(value)" required>
		<option value="select" id ="selector">select....</option >
		<option value="none">none</option>
		<option value="cse">cse</option >
		<option value="mech">mech</option >
		<option value="civil">civil</option >
		<option value="ece">ece</option >
	</select>
</div>
</div>
<div class="form-group">
<label for="subject" class="col-lg-2 control-label">Subject</label>
 <div class="col-lg-10"> 
<select id ="subject" class="form-control" required></select>
</div>
</div>

<div class="form-group">
    <label for="college" class="col-lg-2 control-label">College</label>
    <div class="col-lg-10">
	    <select id="college" class="form-control" required>
		    <option value="gcet">GCET</option>
		    <option value="YCET">YCET</option>
            <option value="MIET">MIET</option>
        </select>
    </div>
</div>
<div class="form-group">
      <label for="title" class="col-lg-2 control-label">BOOK-TITLE</label>
      <div class="col-lg-10">
          <input type="text" class="form-control" placeholder="title" name="TITLE" id="title" required>
      </div>
</div>
<div class="form-group">
      <label for="price" class="col-lg-2 control-label">Price(in Rs)</label>
      <div class="col-lg-10">
	        <input type="text" id ="price" name="Price" class="form-control" placeholder="price"  required>
      </div>
</div>
<div class="form-group">
      <label for="contact" class="col-lg-2 control-label">Contact no.</label>
      <div class="col-lg-10">
	       <input type="text" id="contact" class="form-control" placeholder="contact" required >
      </div>
</div>
<div class = "checkbox">
<label class="col-lg-2"></label>
	<label class="col-lg-10"><input type="checkbox" id="nego" name="nego" value="nego" >DO YOU OFFER NEGOTIATION FOR UR BOOK PRICE</label>
</div>
<div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</fieldset>
</form>
</div>
</body>
</html>
