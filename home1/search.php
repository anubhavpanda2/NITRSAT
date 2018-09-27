<!DOCTYPE html>
<html>
	<head>
	 <!meta http-equiv="refresh" content="20">
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

		    .DivToScroll{   
			    background-color: #F5F5F5;
			    border: 1px solid #DDDDDD;
			    border-radius: 4px 0 4px 0;
			    color: #3B3C3E;
			    font-size: 12px;
			    font-weight: bold;
			    left: -1px;
			    padding: 10px 7px 5px;
			}

			.DivWithScroll{
			    height:400px;
			    overflow:scroll;
			    overflow-x:hidden;
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
  <?php
      session_start();
	  ?>
		<!-- NAVBAR -->
         
		<div class="navbar navbar-inverse">
			<div class="navbar-inner navbar-text">
				<a class="brand" href="#">Kalam Satellite</a>
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
									<input type="hidden"name='hidden1'value="download">
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
				<form class="navbar-search pull-right"action="search.php" method="post">
  <input type="text" class="search-query" placeholder="Search"name="search">
  <input type="submit" value="search" name="submit">
  
</form>
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

		<div class="container">
			<div class="hero-unit">
				<div class="DivWithScroll">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Sl No.</th>
							<th>Filename</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
							<?php
					    //session_start();
						$name=$_POST['search'];
						$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
						mysql_select_db("nitrsat") or die ("couldnt find the db");
						$query1 = mysql_query("SELECT * FROM  fileaccess where subject like '$name%' order by created desc");
						while ($row = mysql_fetch_assoc($query1))
									{
									$date = $row['created'];
									$filename=$row['comments'];
									$filename1=$row['subject'];
									$id=$row['docid'];
									echo
				     		'<tr><td>'.$id.'</td><div class="bs-docs-example" style="padding-bottom: 24px;">
								<form action="display.php"method="post">
								<input type="hidden"value="'.$id.'"name="q">
																<td>'.substr($filename1,0,20).'....'.'</div>
							</td><td>'.$date.'</td><td><button type="submit" class="btn btn-primary" value="submit">view</button></td></tr></form>';
							}
						//if(isset($_SESSION['username'])){
		//				$username=$_SESSION['username'];
	//					$loginas=$_SESSION['loginas'];
//						$query = mysql_query("SELECT * FROM  login WHERE username = '$username'");
		
			/*			$numrows = mysql_num_rows($query);
							
							/*if ($numrows == 0) {
								//echo 'that username doesnt exist';
								header('Location: error2.php');
							}
							
							if ($numrows != 0) 
							{
								//code to log in
								while ($row = mysql_fetch_assoc($query)){ 
									$db_loginpar = $row['login_par'];
									}*/
								//	$query1 = mysql_query("SELECT * FROM  fileaccess order by created desc");
									//while ($row = mysql_fetch_assoc($query1))
									//{
									//$date = $row['created'];
									//$filename=$row['comments'];
									//$id=$row['docid'];
				      /* echo '<tr>
				        	<td>'.$id.'</td>
				        	<td>
				        		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				            		<div class="modal-header">
				              			<h4 id="myModalLabel">Message</h4>
				            		</div>
				            		<div class="modal-body">
									<form class="form-label" action="intermediate_login_database.php" method=\'post\'>
				              			<fieldset>
  									<legend>Login Details</legend>
  									<input type="text"name=\'username\' placeholder="Login ID"><br/>
  									<input type="password"name=\'password\' placeholder="Password"><br/>
									<input type="hidden"name=\'hidden1\'value="download">
  									<select class="form-control"name=\'loginas\'>
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
				            		</div>
				            		<div class="modal-footer">
				              			<button class="btn" data-dismiss="modal">Close</button>
				              			
				            		</div>
				        		</div>';*/
						//		if($db_loginpar!=1)
							//{
				        		/*echo'<div class="bs-docs-example" style="padding-bottom: 24px;">
				            		<a data-toggle="modal" href="#myModal">'.substr($filename,0,10).''.'</a></div></td>
				        	<td>'.$date.'</td>';
									}*/
								//	else
									//{
							//		echo
				     //<!anubhav>	//	'<div class="bs-docs-example" style="padding-bottom: 24px;">
							//	<form action="display.php"method="post">
								//<input type="hidden"value="'.$id.'"name="q">
													//			'.substr($filename,0,10).'....'.'</div>
							//	</td><td>'.$date.'</td><td><button type="submit" class="btn btn-primary" value="submit">clicktoview</button></td></form>
//';
							//	}
				       // 	echo '
				        //</tr>';
					/*	}
						//}
						//}
				//		else
						{*/
						/*$query1 = mysql_query("SELECT * FROM  fileaccess order by created desc");
									while ($row = mysql_fetch_assoc($query1))
									{
									$date = $row['created'];
									$filename=$row['comments'];
									$id=$row['docid'];
						/*echo '<tr>
				        	<td>'.$id.'</td>
				        	<td>
				        		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				            		<div class="modal-header">
				              			<h4 id="myModalLabel">Message</h4>
				            		</div>
				            		<div class="modal-body">
				              			<form class="form-label" action="intermediate_login_database.php" method=\'post\'>
  								<fieldset>
  									<legend>Login Details</legend>
  									<input type="text"name=\'username\' placeholder="Login ID"><br/>
  									<input type="password"name=\'password\' placeholder="Password"><br/>
									<input type="hidden"name=\'hidden1\'value="download">
  									<select class="form-control"name=\'loginas\'>
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
				            		</div>
				            		<div class="modal-footer">
				              			<button class="btn" data-dismiss="modal">Close</button>
				              	
				            		</div>
				        		</div>';
						echo'<div class="bs-docs-example" style="padding-bottom: 24px;">
				            		<a data-toggle="modal" href="#myModal">'.substr($filename,0,10).'....'.'</a></div></td>
				        	<td>'.$date.'</td>';
						}*/
					/*	}*/
						?>
				        
					</tbody>
				</table>
				</div>
			</div>
			
		</div>
 

	    <footer class="footer">
	      	<div class="container">
		      	<legend></legend>
				<font color="red">
	        	<p class="text-center"><strong>NITR Student Satellite Project &copy 2013</strong></p>
	        	<div align="center">
	        		<a href="http:\\www.nitrkl.ac.in">Home</a>
	        	</div>
				</font>
		        	<p> </p>
		        	<legend></legend>
		        	<p> </p>
		        	<p> </p>
	      		</div>
	    </footer>
		
	</body>
</html>