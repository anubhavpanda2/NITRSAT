<!DOCTYPE html>
<html>
	<head>
		<title>NITR Student Satellite Project</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Javascript -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>

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
  			<form class="form-horizontal">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Add a New Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Name</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" id="inputName" placeholder="Name">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Roll No.</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" id="inputRoll" placeholder="Roll No.">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Subsytem</label>
    				<div class="controls">
      					<select>
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
      					<input class="input-xlarge" type="text" id="inputEmail" placeholder="Email">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Authorized As</label>
    				<div class="controls">
      					<select>
			  				
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
			<form class="form-horizontal">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Delete an Existing Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Select Category</label>
    				<div class="controls">
      					<select>
			  				
			  				<option>Student-Coordinator</option>
			  				
			  				<option>Student</option>
			  			</select>
			  		</div>
			  	</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Name</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" id="inputName" placeholder="Name">
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
  			<form class="form-horizontal">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Add a New Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Name</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" id="inputName" placeholder="Name">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Emp id.</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" id="inputRoll" placeholder="Roll No.">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Subsytem</label>
    				<div class="controls">
      					<select>
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
      					<input class="input-xlarge" type="text" id="inputEmail" placeholder="Email">
    				</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Authorized As</label>
    				<div class="controls">
      					<select>
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
			<form class="form-horizontal">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Delete an Existing Member</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Select Category</label>
    				<div class="controls">
      					<select>
			  				<option>Faculty-Coordinator</option>
			  				
			  				<option>Faculty</option>
			  			
			  			</select>
			  		</div>
			  	</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Name</label>
    				<div class="controls">
      					<input class="input-xlarge" type="text" id="inputName" placeholder="Name">
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