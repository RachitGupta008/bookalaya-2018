<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<?php echo form_open('form','class="form-horizontal"'); ?>
		<fieldset>
			<legend>Legend</legend>
			<div class="form-group">
			<label for="inputusername" class="col-lg-2 control-label">Username</label>
				<div class="col-lg-10">
				 
				<input type="text" name="username" class="form-control" id='inputusername' placeholder="Username">	
					
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-lg-2 control-label">Password</label>
				<div class="col-lg-10">
				<?php 
                 $passdata= array('name'=>'password','class'=>'form-control','id'=>'inputPassword','placeholder'=>'Password');
				echo form_password($passdata);
				?>
					
					<div class="checkbox">
						<label>
							<input type="checkbox"> Checkbox
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="reset" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</fieldset>
	</form>
	<?php 
             if(isset($text))
	                           {echo $text;} ?>
</body>
</html>