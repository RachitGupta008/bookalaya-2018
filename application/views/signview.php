<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php echo form_open('signin/validate',['class'=>"form-horizontal"]); ?>
		<fieldset>
			<legend>SIGN-IN</legend>
			<div class="form-group">
			<label for="name" class="col-lg-2 control-label">Name</label>
				<div class="col-lg-10">
				<?php 
                $userdata = array('name'=>'name','class'=>'form-control','id'=>'name','placeholder'=>'name' ,'required'=>'required');
				echo form_input($userdata);
				?>
				</div>
				</div>
			
			<div class="form-group">
<label for="sem" class="col-lg-2 control-label">Semester</label>
 <div class="col-lg-10">
 <?php 
 $semdata = array(
'select'=>'select....',
'1'=>'1st sem',
'2'=>'2nd sem',
'3'=>'3rd sem',
'4'=>'4th sem',
'5'=>'5th sem',
'6'=>'6th sem',
'7'=>'7th sem',
'8'=>'8th sem',
 ); 
$semattr = array(
'id'=>'semester',
'class' =>'form-control',
'required' => 'required'
	);
echo form_dropdown('semester',$semdata,'select',$semattr)
 ?>
</div>
 </div>
<div class="form-group">
<label for="branch" class="col-lg-2 control-label">Branch</label>
 <div class="col-lg-10">

	 <?php 
 $branchdata = array(
'select'=>'select....',
'none'=>'none',
'cse'=>'cse',
'mech'=>'mech',
'civil'=>'civil',
'ece'=>'ece',

 ); 
$branchattr = array(
'id'=>'branch',
'class' =>'form-control',
'required' => 'required'
	);
echo form_dropdown('branch',$branchdata,'select',$branchattr)
 ?>
	
</div>
</div>
<div class="form-group">
    <label for="college" class="col-lg-2 control-label">College</label>
    <div class="col-lg-10">
    	 <?php 
 $collegedata = array(
'gcet' =>'GCET',
'YCET' =>'YCET',
'MIET' =>'MIET'

 ); 
$collegeattr = array(
'id'=>'college',
'class' =>'form-control',
'required' => 'required'
	);
echo form_dropdown('college',$collegedata,'select',$collegeattr)
 ?>
	
	    
    </div>
</div>
<div class="form-group">
      <label for="contact" class="col-lg-2 control-label">Contact no.</label>
      <div class="col-lg-10">
      <?php 
                 $condata= array('name'=>'contact','class'=>'form-control','id'=>'contact','placeholder'=>'Contact','required'=>'required');
				echo form_input($condata);
				?>
				</div>
				</div>
				<div class="form-group">
			<label for="inputusername" class="col-lg-2 control-label">Username</label>
				<div class="col-lg-10">
				<?php 
                $userdata = array('name'=>'username','class'=>'form-control','id'=>'inputusername','placeholder'=>'Username','required'=>'required');
				echo form_input($userdata);
				?>
					
					
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-10">
				<?php 
                 $passdata= array('name'=>'password','class'=>'form-control','id'=>'inputPassword','placeholder'=>'Password','required'=>'required');
				echo form_password($passdata);
				?>
					
					
				</div>
			</div>
	      
      </div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="reset" class="btn btn-default">reset</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</fieldset>
	</form>
</body>
</html>