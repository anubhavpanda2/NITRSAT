<!DOCTYPE html>
<html>
	<head>
		<title>NITR Student Satellite Project</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Javascript -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>

		<style>
			.form-label{
				padding-right: 40px;
				padding-left: 40px;
			}

			.justify {
		    	text-align:justify;
		    }
		</style>

	</head>

	<body>

		<!-- NAVBAR -->

		<div class="navbar navbar-inverse">
			<div class="navbar-inner navbar-text">
				<a class="brand" href="index.php">NITR Student Satellite Project</a>
				<ul class="nav">
					<li class="active navbar-text"><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
					<li class="divider-vertical"></li>
					<ul class="nav">
					  	<li class="dropdown navbar-text navbar-inverse">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					      		<i class="icon-star icon-white"></i> Objective
					    	</a>
					    	<ul class="dropdown-menu">
					      		<li class="navbar-text"><a href="mission.php">Mission</a></li>
					      		<li class="navbar-text"><a href="vision.php">Vision</a></li>
					    	</ul>
					  	</li>
					</ul>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="teams.php"><i class="icon-tasks icon-white"></i> Teams</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="subsystem.php"><i class="icon-list-alt icon-white"></i> Subsystems</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="download.php"><i class="icon-folder-open icon-white"></i> Documents</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="gallery.php"><i class="icon-camera icon-white"></i> Gallery</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="contact.php"><i class="icon-envelope icon-white"></i> Contact Us</a></li>
				</ul>
				<ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown navbar-text">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Login</b></a>
	                    <ul class="dropdown-menu">
	                        <form class="form-label" action="intermediate_login_database.php" method='post'>
  								<fieldset>
  									<legend>Login Details</legend>
  									<input type="text"name='username' placeholder="Login ID">
  									<input type="password"name='password' placeholder="Password">
  									<select class="form-control"name='loginas'>
  										<option value="admin">Admin</option>
  										<option value="facultycoordinator">Faculty Coordinator</option>
  										<option value="faculty">Faculty</option>
  										<option value="student-coordinator">Student Coordinator</option>
										<option value="subsystemcoordinator">Subsystem Coordinator</option>
  										<option value="student">Student</option>
									</select>
  									<button type="submit" class="btn btn-primary" value="submit">Login</button>
  								</fieldset>
							</form>
	                    </ul>
	                </li>
	            </ul>
			</div>
		</div>

		<div class="container">
			<div class="hero-unit">
		<?php
		$a=$_POST['q'];
		$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	$query = mysql_query("select * from fileaccess where docid='$a'");
  $row = mysql_fetch_assoc($query);
$text=$row['comments'];
echo $text;
		?>		
			</div>

			<div align="center">
			<form action="filedownload.php"method="post">
			<input type="hidden"value="<?php echo $a?>"name="id" >
				<button class="btn btn-large btn-primary"  input type="submit">Download</button>
				</form>
			</div>

			<br>
		</div>


	    <footer class="footer">
	      	<div class="container">
		      	<legend></legend>
	        	<p class="text-center"><strong>NITR Student Satellite Project &copy 2013</strong></p>
	        	<div align="center">
	        		<a href="index.html">Home</a>
	        	</div>
		        	<p> </p>
		        	<legend></legend>
		        	<p> </p>
		        	<p> </p>
	      		</div>
	    </footer>
		
	</body>
</html>