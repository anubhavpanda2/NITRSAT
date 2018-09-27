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
		</style>

	</head>
	<style>
	body 
{
 background-image:url('nasa0.jpg');
background-repeat:no-repeat;
background-attachment:fixed;


}
 </style>
	<body>

		<!-- NAVBAR -->

		<div class="navbar navbar-inverse">
			<div class="navbar-inner navbar-text">
				<a class="brand" href="index.php">Name</a>
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
									<input type="hidden"name='hidden1'value="subsystem">
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

		<!-- HERO CONTENT -->
<div class="container">
		<div class="hero-unit">		
	  <?php
	  session_start();
$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
	mysql_select_db("nitrsat") or die ("couldnt find the db");
	$query = mysql_query("SELECT * FROM  register");
	while ($row = mysql_fetch_assoc($query)) {
			$name = $row['name'];
			$roll = $row['rollno'];
			$mail= $row['mail'];
			$loginas = $row['loginas'];
			$choice1=$row['choice1'];
			$choice2=$row['choice2'];
			echo'<form class="form-horizontal" action="requestadd.php" method="post">';
			echo '<font color="blue">Name :  '.strtoupper($name).'</font><br/>';
			echo '<input type="hidden" name="name"value="'.$name.'">';
			echo '<font color="blue">Roll :  '.strtoupper($roll).'</font><br/>';
			echo '<input type="hidden" name="roll"value="'.$roll.'">';
			echo '<font color="blue">Mail id:  '.($mail).'</font><br/>';
			echo '<input type="hidden" name="mail"value="'.$mail.'">';
			echo '<font color="blue">Login as :  '.strtoupper($loginas).'</font><br/>';
			echo '<input type="hidden" name="loginas"value="'.$loginas.'">';
			echo '<font color="blue">Subsystem&nbsp  <select name="subsystem"><option>'.$choice1.'</option><option>'.$choice2.'</option></select></font><br/><br/>';
			echo'<center><input type="submit" class="btn btn-large btn-danger" value="add" name="add"> &nbsp';
			echo '<input type="submit" class="btn btn-large btn-danger"value="delete"name="add"></center><hr/>';
			echo'</form>';
			}
	  ?>
	  
	  </div>
	  </div>
	  
		

		
		
		 

		<!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
      	<legend></legend>
        <p class="text-center"><strong>NITR Student Satellite Project &copy 2013</strong></p>
        <div align="center">
        	<a href="http:\\www.nitrkl.ac.in">Home</a>
        </div>
        <p> </p>
        <legend></legend>
        <p> </p>
        <p> </p>
      </div>
    </footer>
		
	</body>
</html>