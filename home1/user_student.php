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
			.form-admin{
				padding-top: 20px;
				padding-right: 40px;
				padding-left: 40px;
			}
		</style>
		<style>
body 
{
 background-image:url('nasa0.jpg');
background-repeat:no-repeat;
background-attachment:fixed;


}
</style>

	</head>

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
					<li class="navbar-text"><a href="user_admin.php"><i class="icon-envelope icon-white"></i>student</a></li>
					
					<li class="navbar-text"><a href="logout.php"><i class="icon-envelope icon-white"></i> logout</a></li>
					
				</ul>-->
				
			</div>
		</div>
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


		<!-- HERO CONTENT -->
		<div class="tab-content">
   
		<div class="container">
		<div class="hero-unit">
			<div align="center">
				<!--<div class="btn-group">
  					<a class="btn btn-large btn-primary" href="member_add.php">
    					Add or Delete a Member
  					</a><br/><br/>
					<a class="btn btn-large btn-primary" href="registerview.php">
						Requested members
  					</a>
  				</div>
				-->
					<form action="notification.php" method="POST">
					<br/>Notification:<textarea class="input-xxlarge" id="textarea2" name="notification" rows="4"></textarea><br/>
					<button class="btn btn-large btn-primary" input type="submit">Add</button>
					<input type="hidden"name="hidden"value="student"/>
					</form>
			</div>
		</div>
		
		
		<form action="fileupload.php" method="POST" enctype="multipart/form-data">
		
		
		<div class="hero-unit">
		<h3><font color="blue">File upload</font></h3>
			<div align="center">
				
<div class="control-group">
<input type="hidden"name="hidden1"value="admin"/>
<table>
		<tr><td>			Document Id:</td><td><input type="text" name="documentid"placeholder="document id"/></td><tr><br/>
				<tr><td>	Subject:</td><td><textarea class="input-xxlarge" id="textarea2" name="subject" rows="2"></textarea></td><tr><br/></table>
          	<label class="control-label" for="textarea"><h3>Enter Notification</h3></label>
            		<div class="controls">
              			<textarea class="input-xxlarge" id="textarea2" name="textarea" rows="4"></textarea>
            		</div>
          		</div>
			
				<input type="file" name="uploaded_file"/><br/>
				<button class="btn btn-large btn-primary" input type="submit">Upload a File</button>
			</div>
		</div>
		
		
</form> <div class="container">
		
		<div class="hero-unit">
<h3><font color="blue">Delete Files</font></h3>		
			<div align="center">
				<div class="btn-group">
				<form action="deletedocument.php"method="post">
				Document Id:<input type="text" name="documentid1"placeholder="document id"/><br/>
  					<button class="btn btn-large btn-primary" input type="submit">Delete File</button>
					</form>
  				</div>
			</div>
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