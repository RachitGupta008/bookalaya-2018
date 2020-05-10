<!DOCTYPE html>
<html>
<head>
	<title>sell</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	var k = document.getElementById("sem");
    var l;
    function changes(){
     k = document.getElementById("sem").value;
     document.getElementById("select").selected="selected";
     l=k;
     }
     function getsub(i){
     	var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("subject").innerHTML = this.responseText;
            
            }
        };
        xmlhttp.open("POST","usercon/searchsub" , true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send('branch='+i+'&sem='+l);

     }
	function getnewcon(){
		var subject=document.getElementById("subject").value;

var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("content").innerHTML = this.responseText;
            
            }
        };
        xmlhttp.open("POST","sellcon/searchcontent" , true);
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send('subject='+subject);

	}
</script>
</head>
<body onload="getContent()" data-spy="scroll" data-target="#myScrollspy" data-offset="15">
<script type="text/javascript">
		function getContent(){
        var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("content").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","sellcon/search" , true);
        xmlhttp.send();
		}
	</script>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<div class"container">
<div class"row">
<div class="col-sm-3">
<div class ="panel panel-default">
<div class ="panel-body">
<div>SEM:<select id = "sem" onchange="changes()"  required>
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
<div>
	Branch:<select id="branch" onchange="getsub(value)" required>
		<option value="select" id ="select">select....</option >
		<option value="none">none</option>
		<option value="cse">cse</option >
		<option value="mech">mech</option >
		<option value="civil">civil</option >
		<option value="ece">ece</option >
	</select>
</div>
<div>
	Subject:<select id="subject">
		
	</select>
</div>
<button onclick="getnewcon()">Submit</button>
</div>
</div>
</div>

<div  class="col-sm-9">
<div class ="panel panel-default">
<div class ="panel-body" id ="content">
</div>
</div>
</div>
</div>
</div>
</body>
</html>
