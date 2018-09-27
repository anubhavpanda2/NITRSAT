<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="refresh" content="100">
		<title>Satellite
		</title>
         
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		<!-- Javascript -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.eislideshow.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
        <script src="menuscript.js" language="javascript" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="menustyle.css" media="screen, print" />

<!--slider-->
<script type="text/javascript">
               $(function() {
                   $('#ei-slider').eislideshow({
                      animation			: 'center',
                      autoplay			: true,
                      slideshow_interval	: 3000,
                      titlesFactor		: 0
                    });
              });
         </script>
<!--slider-->
<style>
#something { 
    position:relative;
}
</style>
<script>
$(window).scroll(function(){
    if ($(window).scrollTop() > 50){
        $("#something").css("top", $(window).scrollTop() - 50 + "px");
    } else {
        $("#something").css("top", "0px");
    }
});
</script>
		<style>
			.form-label{
				padding-right: 40px;
				padding-left: 40px;
			}
			<style>
			div{
			  resize:both;
			  overflow:auto;
			  
			 }
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

		</style>
		<script>
function removeOption()
{
var x=document.getElementById("mySelect").value;

var x1=document.getElementById("mySelect1").value;
if(x1 == x)
{
alert("1stchoice != 2ndchoice");
}
}
function login()
{
var x=document.getElementById("lun").value;
var x1=document.getElementById("lps").value;
if(x=='')
{
alert("please insert username");
return false;
}
if(x1=='')
{
alert("please insert password");
return false;
}
}
function signup()
{
var x=document.getElementById("sun").value;
var x1=document.getElementById("sps").value;
var x2=document.getElementById("scps").value;
if(x=='')
{
alert("please insert username");
return false;
}
if(x1=='')
{
alert("please insert password");
return false;
}
if(x1!=x2)
{
alert("password != confirmpassword ");
return false;
}

}

</script>
	</head>
     <style>
body 
{
 background-image:url('nasa0.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
}
body
{
 width:100%;
 display:-webkit-box-pack: center;
}
#big
{
 -webkit-box-orient:horizontal;
 -webkit-box-flex:1;

}

</style>
	<body>
	
<?php
session_start();
?>
		<!-- NAVBAR -->
		<div id="big">
      <div>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner navbar-text">
				<a class="brand" href="index.php">Kalam Satellite</a>
				<ul class="nav">
				<!--
					<li class="active navbar-text"><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
					<li class="divider-vertical"></li>
					 <li class="navbar-text"><a href="mission.php"><i class="icon-star icon-white"></i>Objective</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="teams.php"><i class="icon-tasks icon-white"></i>Teams</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="subsystem.php"><i class="icon-list-alt icon-white"></i> Subsystems</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="download.php"><i class="icon-folder-open icon-white"></i> Documents</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="gallery.php"><i class="icon-camera icon-white"></i> Gallery</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="contact.php"><i class="icon-envelope icon-white"></i> Contact Us</a></li>
					<li class="divider-vertical"></li> 
				-->
				</ul>
				<ul class="nav pull-right">
				<li class="divider-vertical"></li> 
									
					<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				            		<div class="modal-header">
				              			<h4 id="myModalLabel">Sign up</h4>
				            		</div>
				            		<div class="modal-body">
				              			<fieldset>
  									<legend>Login Details</legend>
									<form action="signup.php"method="post">
									<table>
  									<tr><td><font color="black">Username</font></td><td><input type="text"name='username3' placeholder="Login ID"id="sun"></td></tr>
  									<tr><td><font color="black">password</font></td><td><input type="password"name='password3' placeholder="Password"id="sps"></td></tr>
									<tr><td><font color="black">confirm password</font></td><td><input type="password"name='password4' placeholder="Password"id="scps"></td></tr>
  									<tr><td><font color="black">loginas</font></td><td><select class="form-control"name='loginas3'>
  										<option value="admin">Admin</option>
  										<option value="facultycoordinator">Faculty Coordinator</option>
  										<option value="faculty">Faculty</option>
  										<option value="student-coordinator">Student Coordinator</option>
										<option value="subsystemcoordinator">Subsystem Coordinator</option>
  										<option value="student">Student</option>
									</select></td></tr>
									</table>
  									<button type="submit" class="btn btn-primary" value="submit" onclick="return signup()">Signup</button>
									</form>
  								</fieldset>
				            		</div>
				            		<div class="modal-footer">
				              			<button class="btn" data-dismiss="modal">Close</button>
				              			
				            		</div>
				        		</div>
								<!--anubhav-->
								<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				            		<div class="modal-header">
				              			<h4 id="myModalLabel"><font color="blue">Register</font></h4>
				            		</div>
				            		<div class="modal-body">
				              			<fieldset>
									<form action="register.php"method="post">
									<table>
  									<tr><td><font color="black">Username</font></td><td><input type="text"name='rusername' placeholder="Login ID"></td></tr>
  									<tr><td><font color="black">Roll no</font></td><td><input type="text"name='rrollno' placeholder="Roll no"></td></tr>
									<tr><td><font color="black">Mail id</font></td><td><input type="mail"name='rmailid' placeholder="Mail id"></td></tr>
  									<tr><td><font color="black">loginas</font></td><td><select class="form-control"name='rloginas'>
  										<option value="faculty">Faculty</option>				
  										<option value="student">Student</option>
									</select></td></tr>
									<tr><td><font color="black">1stchoice</font></td><td><select class="form-control"placeholder='select'name='1stchoice'id="mySelect"onchange="removeOption()">
									<option>select</option>
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
									</select></td></tr>
									<tr><td><font color="black">2ndchoice</font></td><td><select class="form-control"name='2ndchoice'id='mySelect1'onchange="removeOption()">
									<option>select</option>
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
									</select></td></tr>
									</table>
  									<button type="submit" class="btn btn-primary" value="submit">Register</button>
									</form>
  								</fieldset>
				            		</div>
				            		<div class="modal-footer">
				              			<button class="btn" data-dismiss="modal">Close</button>
				              		
				            		</div>
				        		</div>
								
								<!--anubhav-->
					<?php
					    //session_start();
						$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
						mysql_select_db("nitrsat") or die ("couldnt find the db");
						if(isset($_SESSION['username'])){
						$username=$_SESSION['username'];
						$loginas=$_SESSION['loginas'];
						$query = mysql_query("SELECT * FROM  login WHERE username = '$username'");
		
						$numrows = mysql_num_rows($query);
							
							/*if ($numrows == 0) {
								//echo 'that username doesnt exist';
								header('Location: error2.php');
							}*/
							
							if ($numrows != 0) {
								//code to log in
								while ($row = mysql_fetch_assoc($query)) 
									$db_loginpar = $row['login_par'];
									}
							if($db_loginpar==1)
							{
							    switch($loginas)
								{
								 case "student":
								 echo '<li class="navbar-text"><a href="user_student.php"><i class="icon-envelope icon-white"></i>'.$loginas.'</a></li>';
								 break;
							     
                                 case "admin":
								 echo '<li class="navbar-text"><a href="user_admin.php"><i class="icon-envelope icon-white"></i>'.$loginas.'</a></li>';
								 break;
																 
								
								 
								}
							}	}
					?>
					
				</ul>
				<?php
				   
				   
				   //session_start();
						$connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
						mysql_select_db("nitrsat") or die ("couldnt find the db");
						if(isset($_SESSION['username'])){
						$username=$_SESSION['username'];
						$loginas=$_SESSION['loginas'];
						$query = mysql_query("SELECT * FROM  login WHERE username = '$username'");
		
						$numrows = mysql_num_rows($query);
							
							/*if ($numrows == 0) {
								//echo 'that username doesnt exist';
								header('Location: error2.php');
							}*/
							
							if ($numrows != 0) {
								//code to log in
								while ($row = mysql_fetch_assoc($query)) 
									$db_loginpar = $row['login_par'];
									}
							if($db_loginpar==0)
							{
				              echo '
				              
				   
				   
				   
				   
				   
				<ul class="nav pull-right">
				<li class="navbar-text"><a data-toggle="modal" href="#myModal1"><i class="icon-tasks icon-white"></i>register</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown navbar-text">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Login</b></a>
	                    <ul class="dropdown-menu">
                        <form class="form-label" action="intermediate_login_database.php" method=\'post\'>
  								<fieldset>
  									<legend>Login Details</legend>
  									<input type="text"name=\'username\' placeholder="Login ID"id="lun">
  									<input type="password"name=\'password\' placeholder="Password"id="lps">
									<input type="hidden"name=\'hidden1\'value="index">
  									<select class="form-control"name=\'loginas\'>
  										<option value="admin">Admin</option>
  										<option value="facultycoordinator">Faculty Coordinator</option>
  										<option value="faculty">Faculty</option>
  										<option value="student-coordinator">Student Coordinator</option>
										<option value="subsystemcoordinator">Subsystem Coordinator</option>
  										<option value="student">Student</option>
									</select>
  									<button type="submit" class="btn btn-primary" value="submit"onclick="return login()">Login</button>			
<button  data-toggle="modal" href="#myModal" class="btn btn-primary" value="signup">Signup</button>
  								</fieldset>
							</form>
	                    </ul>
	                </li>
	            </ul>';
				}
				else
				 {
				 echo'
				  <ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="navbar-text"><a href="logout.php">Logout</a></li>
	            </ul>';
				 }
				 }
				 else
				 {
				     echo '<ul class="nav pull-right">
					 <li class="divider-vertical"></li>
					 <li class="navbar-text"><a data-toggle="modal" href="#myModal1"><i class="icon-tasks icon-white"></i>register</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown navbar-text">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user icon-white"></i> Login</b></a>
	                    <ul class="dropdown-menu">
                        <form class="form-label" action="intermediate_login_database.php" method=\'post\'>
  								<fieldset>
  									<legend>Login Details</legend>
  									<input type="text"name=\'username\' placeholder="Login ID"id="lun">
  									<input type="password"name=\'password\' placeholder="Password"id="lps">
  									<select class="form-control"name=\'loginas\'>
  										<option value="admin">Admin</option>
  										<option value="facultycoordinator">Faculty Coordinator</option>
  										<option value="faculty">Faculty</option>
  										<option value="student-coordinator">Student Coordinator</option>
										<option value="subsystemcoordinator">Subsystem Coordinator</option>
  										<option value="student">Student</option>
									</select>
  									<button type="submit" class="btn btn-primary" value="submit"onclick="return login()">Login</button>
									
									<button  data-toggle="modal" href="#myModal" class="btn btn-primary" value="signup">Signup</button>
									
  								</fieldset>
							</form>
	                    </ul>
	                </li>
	            </ul>';
				 
				 
				 }
				?>
			</div>
		</div>
		</div>
        <!-- <div class="tabbable tabs-left">
                 <ul class="nav nav-tabs">
                     <li class="active navbar-text"><a href="index.php"><i class="icon-home icon-white"></i> Home   </a></li>
					 <div>&nbsp;</div>
					  
					 <li class="navbar-text"><a href="mission.php"><i class="icon-star icon-white"></i> Objective  </a></li>
					 <div>&nbsp;</div>
					 
					<li class="navbar-text"><a href="teams.php"><i class="icon-tasks icon-white"></i> Teams</a></li>
					<div>&nbsp;</div>
					 
					<li class="navbar-text"><a href="subsystem.php"><i class="icon-list-alt icon-white"></i> Subsystems</a></li>
					<div>&nbsp;</div>
					 
					<li class="navbar-text"><a href="download.php"><i class="icon-folder-open icon-white"></i> Documents</a></li>
				     <div>&nbsp;</div>
					 
					<li class="navbar-text"><a href="gallery.php"><i class="icon-camera icon-white"></i> Gallery</a></li>
					<div>&nbsp;</div>
					 
					<li class="navbar-text"><a href="contact.php"><i class="icon-envelope icon-white"></i> Contact Us</a></li>
					
  </ul>
  <div class="tab-content">
		<div class="container">
		  <div class="hero-unit">
		  <h3 style="color: green;">NITR student satellite project</h3>
			<p align="justify"><img src="isro.JPG" width="329" height="200" />    <img src="isro1.JPG" width="329" height="230" /><br />
    <br />
    NITRSAT is an initiative by National Institute of Technology, Rourkela to involve and enlighten students about making of a satellite and about the Indian space program. The objective of the proposed project is to develop and deploy a nano-satellite (make it hyperlink) and to use it for monitoring the ecology of Chotanagpur plateau that includes region of Odisha, Jharkhand, Chhattisgarh and West Bengal. This information will be utilized to help the inhabitants of the plateau region to have a better knowledge of their surrounding land and use it for the betterment of their living.
Nano satellite: The term nano satellite or nanosat is applied to an artificial satellite having mass between 1 and 10 kg (2.2 and 22 lb). Designs and proposed designs of these types may be launched individually, or they may have multiple nano satellites working together. 

'. </p>

		  </div>	
		</div>
  </div>
</div>  
		<!-- HERO CONTENT -->
		<!--
		<div class="hero-unit">
  			<h1 class="text-center">Student Satellite Project</h1>
  			<h4 class="text-center">NIT Rourkela and ISRO Joint Project</h4>
		</div>
        
		<div class="container">
		  <div class="hero-unit">
		  <h3 style="color: green;">NITR student satellite project</h3>
			<p align="justify"><img src="isro.JPG" width="329" height="200" />    <img src="isro1.JPG" width="329" height="230" /><br />
    <br />
    NITRSAT is an initiative by National Institute of Technology, Rourkela to involve and enlighten students about making of a satellite and about the Indian space program. The objective of the proposed project is to develop and deploy a nano-satellite (make it hyperlink) and to use it for monitoring the ecology of Chotanagpur plateau that includes region of Odisha, Jharkhand, Chhattisgarh and West Bengal. This information will be utilized to help the inhabitants of the plateau region to have a better knowledge of their surrounding land and use it for the betterment of their living.
Nano satellite: The term nano satellite or nanosat is applied to an artificial satellite having mass between 1 and 10 kg (2.2 and 22 lb). Designs and proposed designs of these types may be launched individually, or they may have multiple nano satellites working together. 

'. </p>

		  </div>	
		</div> -->
	<!-- html -->
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
		  <div class="hero-unit" style="height:800px;">
			
<div id="ei-slider" class="ei-slider">
    <ul class="ei-slider-large">
        <li>
            <img src="images/large/1.jpg" alt="image01" />
            <div class="ei-title">
                <h2>nano satellite</h2>
                <h3>KALAM</h3>
            </div>
        </li>
        <li>
		<img src="images/large/2.jpg" alt="image02" />
            <div class="ei-title">
                <h2>NIT Rourkela</h2>
                <h3>KALAM</h3>
            </div>
		</li>
		<li>
		<img src="images/large/3.jpg" alt="image03" />
            <div class="ei-title">
                <h2>started on 2013</h2>
                <h3>KALAM</h3>
            </div>
		</li>
		<li>
		<img src="images/large/4.jpg" alt="image04" />
            <div class="ei-title">
                <h2>with a vision</h2>
                <h3>KALAM</h3>
            </div>
		</li>
		
    </ul>
    <ul class="ei-slider-thumbs">
        <li class="ei-slider-element">Current</li> 
        <li>
            <a href="#">Slide 1</a>
            <img src="images/thumbs/1.jpg" alt="thumb01" /> 
        </li>
        <li>
		 <a href="#">Slide 2</a>
            <img src="images/thumbs/2.jpg" alt="thumb02" /> 
		</li>
		<li>
		 <a href="#">Slide 3</a>
            <img src="images/thumbs/3.jpg" alt="thumb03" /> 
		</li>
       <li>
		 <a href="#">Slide 4</a>
            <img src="images/thumbs/4.jpg" alt="thumb04" /> 
		</li>
       <li>
		 
		</li>		
    </ul> 
</div>
<br />
			<p style="font-size:15px;">
			Kalam Nano-satellite is an initiative by National Institute of Technology, Rourkela to involve and enlighten students about making of a satellite and about the Indian space program. The satellite is named after the missile man of India Dr. A. P. J. Abdul Kalam.
			</p>
             <div style="display:block; float:left; width:300px; height:250px; margin:50px auto; padding: 15px; text-align:center; border:1px solid blue; background:light blue;-webkit-border-radius:25px;-webskit-box-shadow:rgb(110) ">
                <font color="blue">  General Documents</font>
				<br/><a  href="isro.pdf">Isro project</a><br/>
				<a href="http://www.antarikshalabs.in/balloonsat-competition">Proposal for Balloonsat </a><br/>
		     </div>	
			 <div style="display:block; float:right;  width:300px; height:250px; margin:50px auto; padding: 15px; text-align:center; border:1px solid blue; background:; -webkit-border-radius:25px;-webskit-box-shadow:rgb(110)  ">
                <font color="blue">  Notices & Messages</font>
				  <?php
				  $connect = mysql_connect("localhost", "root", "") or die ("couldnt connect");
						mysql_select_db("nitrsat") or die ("couldnt find the db");
				  $query = mysql_query("SELECT * FROM  notifications order by created desc");
				  $array=array();
				  $j=0;
				  echo'<marquee direction="up" onmouseover="this.setAttribute(\'scrollamount\', 0, 0);" onmouseout="this.setAttribute(\'scrollamount\', 3, 0);">';
				  while ($row = mysql_fetch_assoc($query)) 
				  {
									$array[$j] = $row['notification'];
									echo '<font color="red" style="font-size:14px;">'.$row['created'].'&nbsp'.$row['notification'].'</font><hr/>';
									$j+=1;
									}
									echo'</ol></marquee>';
									
				  ?>
		     </div>	
		</div>
        </div>

		<!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
      	<legend></legend>
        <p class="text-center" style="color:red"><strong>NITR Student Satellite Project &copy 2013</strong></p>
        <div align="center">
        	<a href="http:\\www.nitrkl.ac.in" style="color:red">Home</a>
        </div>
        <p> </p>
        <legend></legend>
        <p> </p>
        <p> </p>
      </div>
    </footer>
		</div>
	</body>
</html>