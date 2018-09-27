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
  			<form class="form-horizontal">
  				<div class="control-group">
  					<div class="controls">
  						<legend><h3>Add a New Notification</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
            		<label class="control-label" for="textarea">Enter Notification</label>
            		<div class="controls">
              			<textarea class="input-xxlarge" id="textarea2" name="textarea2" rows="4"></textarea>
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
  						<legend><h3>Delete an Existing Notification</h3></legend>
  					</div>
  				</div>
  				<div class="control-group">
  					<label class="control-label" for="inputName">Select Notification</label>
    				<div class="controls">
      					<select>
			  				<option>Notification 1</option>
			  				<option>Notification 2</option>
			  				<option>Notification 3</option>
			  				<option>Notification 4</option>
			  			</select>
			  		</div>
			  	</div>
  				<div class="control-group">
  					<div class="controls">
  						<button class="btn btn-large btn-danger">Delete</button>
  					</div> 					
  				</div>
  			</form>
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