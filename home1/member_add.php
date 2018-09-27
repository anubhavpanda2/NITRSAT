<!DOCTYPE html>
<html>
	<head>
		<title>NITR Student Satellite Project</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Javascript -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/typeahead.js"></script> 
		<style>
h1{
font-size: 20px;
color: #111;
}
.content{
	width: 80%;
	margin: 0 auto;
	margin-top: 50px;
}

.typeahead-devs, .tt-hint,.country,.allcountry  {
 	border: 2px solid #CCCCCC;
    border-radius: 8px 8px 8px 8px;
    font-size: 24px;
    height: 45px;
    line-height: 30px;
    outline: medium none;
    padding: 8px 12px;
    width: 200px;
}

.tt-dropdown-menu {
  width: 200px;
  margin-top: 5px;
  padding: 8px 12px;
  background-color: #fff;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  
  font-size: 18px;
  color: #111;
  background-color:"white";
}

</style>

<script>
$(document).ready(function() {
$('input.typeahead-devs').typeahead({
  name: 'accounts',
  remote : 'country1.php?query=%QUERY'
});

$('input.country').typeahead({
  name: 'country',
  remote : 'country.php?query=%QUERY'

});

$('input.allcountry').typeahead({
  name: 'allcountry',
  prefetch : 'http://www.a2zwebhelp.com/allcountry.php'
});

})
</script>

	</head>

	<body>

		<!-- NAVBAR -->

		<div class="navbar navbar-inverse">
			<div class="navbar-inner navbar-text">
				<a class="brand" href="#">NITR Student Satellite Project</a>
				<ul class="nav">
					<li class="navbar-text"><a href="index.php">Home</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Objective</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Teams</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Subsystems</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Timeline</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Gallery</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Contact Us</a></li>
					<li class="divider-vertical"></li>
					<li class="active navbar-text"><a href="user_admin.php">Admin</a></li>
				</ul>
				
				
				<ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="navbar-text"><a href="logout.php">Logout</a></li>
	            </ul>
			</div>
		</div>

		<!-- HERO CONTENT -->
		
		<div class="hero-unit">
  			<ul id="myTab" class="nav nav-tabs">
            	<li class="active"><a href="#student" data-toggle="tab">student</a></li>
            	<li><a href="#faculty" data-toggle="tab">faculty</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
            	<div class="tab-pane fade in active" id="student">
                	<p><div class="hero-unit">
  			<form class="form-horizontal" action="process_member_add.php" method="post">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Add a New Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label"  for="inputName">Name</label>
    				<div class="controls">
      					<input class="input-xlarge"  type="text" name="name" id="inputName" placeholder="Name">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Roll No.</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" name="roll" id="inputRoll" placeholder="Roll No.">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Subsytem</label>
    				<div class="controls">
      					<select name="subsystem">
			  				<option>Structure</option>
			  				<option>Thermal</option>
			  				<option>Power System</option>
			  				<option>RF System</option>
			  				<option>On Board Computer</option>
			  				<option>On Board Software</option>
			  				<option>ACS</option>
			  				<option>Sensors</option>
			  				<option>Actuators</option>
			  				<option>Ground Segment</option>
			  				<option>Payload</option>
			  				<option>R Q&ampA</option>
	  					</select>
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">E-mail</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" name="email" id="inputEmail" placeholder="Email">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Authorized As</label>
    				<div class="controls">
      					<select name="loginas">
			  				
			  				<option>Student</option>
							
							<option>Student coordinator</option>
	  					</select>
    				</div>
  				</div>
  				
				
				
				
				
  				<div class="control-group">
  					<div class="controls">
  						<button class="btn btn-large btn-success">Add</button>
  					</div> 					
  				</div>
			</form>
		</div>

		<div class="hero-unit">
			<form class="form-horizontal" action="process_member_delete.php" method="post">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Delete an Existing Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Select Category</label>
    				<div class="controls">
      					<select name="loginas1">
			  				
			  				<option>Student-Coordinator</option>
			  				
			  				<option>Student</option>
			  			</select>
			  		</div>
			  	</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Name</label>
    				<div class="controls">
					<table>
      					<tr><td><input type="text" name="input.country" size="10" class="country"placeholder="Name"></td></tr>
						<tr><td> <span id="txtHint"></span></td></tr>
						</table>
    				</div>
  				</div>
  				<div class="control-group">
  					<div class="controls">
  						<button class="btn btn-large btn-danger">Delete</button>
  					</div> 					
  				</div>
  			</form>
		</div></p>
              	</div>
            	<div class="tab-pane fade" id="faculty">
                	<p><div class="hero-unit">
  			<form class="form-horizontal" action="process_member_add.php" method="post">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Add a New Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label"  for="inputName">Name</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" name="name" id="inputName" placeholder="Name">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Emp id.</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" name="roll" id="inputRoll" placeholder="Roll No.">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Subsytem</label>
    				<div class="controls">
      					<select name="subsystem">
			  				<option>Structure</option>
			  				<option>Thermal</option>
			  				<option>Power System</option>
			  				<option>RF System</option>
			  				<option>On Board Computer</option>
			  				<option>On Board Software</option>
			  				<option>ACS</option>
			  				<option>Sensors</option>
			  				<option>Actuators</option>
			  				<option>Ground Segment</option>
			  				<option>Payload</option>
			  				<option>R Q&ampA </option>
	  					</select>
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">E-mail</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" name="email" id="inputEmail" placeholder="Email">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Authorized As</label>
    				<div class="controls">
      					<select name="loginas">
			  				<option>Faculty</option>
			  			
							<option>Faculty coordinator</option>
							
	  					</select>
    				</div>
  				</div>
  				
				
				
				
				
  				<div class="control-group">
  					<div class="controls">
  						<button class="btn btn-large btn-success">Add</button>
  					</div> 					
  				</div>
			</form>
		</div>

		<div class="hero-unit">
			<form class="form-horizontal" action="process_member_delete.php" method="post">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Delete an Existing Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Select Category</label>
    				<div class="controls">
      					<select name="loginas1">
			  				<option>Faculty-Coordinator</option>
			  				
			  				<option>Faculty</option>
			  			
			  			</select>
			  		</div>
			  	</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Name</label>
    				<div class="controls">
      					<table>
      					<tr><td><input type="text" name="accounts" size="10" class="typeahead-devs"placeholder="Name"></td></tr>
						<tr><td> <span id="txtHint1"></span></td></tr>
						</table>

    				</div>
  				</div>
				
  				<div class="control-group">
  					<div class="controls">
  						<button class="btn btn-large btn-danger">Delete</button>
  					</div> 					
  				</div>
  			</form>
		</div></p>
              	</div>
            </div>
		</div>
		

		<!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
      	<legend></legend>
        <p class="text-center"><strong>NITR Student Satellite Project &copy 2013</strong></p>
        <div align="center">
        	<a href="index.php">Home</a>
        </div>
        <p> </p>
        <legend></legend>
        <p> </p>
        <p> </p>
      </div>
    </footer>
		
	</body>
</html>