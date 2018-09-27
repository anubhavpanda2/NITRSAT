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

		    .carousel .item {
		    	height: 400px;
		    }

		    .carousel-caption {
		    	height: 60px;
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
				<a class="brand" href="index.php">Kalam Satellite</a>
				<!--<ul class="nav">
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
	            </ul>-->
			</div>
		</div>

		<!-- HERO CONTENT -->
		<div style="float:left" id='something'>
  <table border="0" cellpadding="30" cellspacing="0"><tr><td>
<a href="index.php" onmouseover="setOverImg('1','');" onmouseout="setOutImg('1','');" target=""><img src="buttons/button1up.png" border="0" id="button1" vspace="10" hspace="1"></a><br>
<a href="mission.php" onmouseover="setOverImg('2','');" onmouseout="setOutImg('2','');" target=""><img src="buttons/button2up.png" border="0" id="button2" vspace="10" hspace="1"></a><br>
<a href="download.php" onmouseover="setOverImg('3','');" onmouseout="setOutImg('3','');" target=""><img src="buttons/button3up.png" border="0" id="button3" vspace="10" hspace="1"></a><br>
<a href="subsystem.php" onmouseover="setOverImg('4','');" onmouseout="setOutImg('4','');" target=""><img src="buttons/button4up.png" border="0" id="button4" vspace="10" hspace="1"></a><br>
<a href="gallery.php" onmouseover="setOverImg('5','');" onmouseout="setOutImg('5','');" target=""><img src="buttons/button5up.png" border="0" id="button5" vspace="10" hspace="1"></a><br>
<a href="contact.php" onmouseover="setOverImg('6','');" onmouseout="setOutImg('6','');" target=""><img src="buttons/button6up.png" border="0" id="button6" vspace="10" hspace="1"></a><br>
</td></tr></table>

</div>
		<div class="container" >
			<div class="hero-unit" style="height:500px">
			<h3 align="center">Contact Us</h3>
				<div align="left">
				
					<div style="float:left;">
					<legend></legend>
					<p><h4>Cyan Subhra Mishra</h4></p>
					<p><h4><small>711ec2004@nitrkl.ac.in</small></h4></p>
					<p><h4><small>cyanmishra92@gmail.com</small></h4></p>
					<p><h4><small>Ph: +91-9438405588</small></h4></p>
					<legend></legend>
					
					<legend></legend>
					<p><h4>Anubhav Panda</h4></p>
					<p><h4><small>111cs0044@nitrkl.ac.in</small></h4></p>
					<p><h4><small>Ph: +91-943873100</small></h4></p>
					<legend></legend>
					
					<legend></legend>
					<p><h4>Sandeep Panda</h4></p>
					<p><h4><small>711cs1030@nitrkl.ac.in</small></h4></p>
					<p><h4><small>Ph: +91-8895798833</small></h4></p>
					<legend></legend>
					</div>
					<div style="float:right;">
					 <legend></legend>
					<p><h4>Sanjit Dash</h4></p>
					<p><h4><small>111cs0122@nitrkl.ac.in</small></h4></p>
					<p><h4><small>Ph: +91-9439535066</small></h4></p>
					<legend></legend>
					<legend></legend>
					<p><h4>Sourav Mondal</h4></p>
					<p><h4><small>111cr0103@nitrkl.ac.in</small></h4></p>
					<p><h4><small>Ph: +91-96925596364</small></h4></p>
					<legend></legend>
					
					<legend></legend>
					<p><h4>Raman Mishra</h4></p>
					<p><h4><small>111cs0606@nitrkl.ac.in</small></h4></p>
					<p><h4><small>Ph: +91-8763003834</small></h4></p>
					
					</div>
				
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