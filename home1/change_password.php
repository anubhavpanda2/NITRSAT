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
		<script>
		
      function cmp(str1)
{
var np = document.getElementById("np").value;
if(str1!=np)
alert("password not matched");
}
</script>
<script>
function showHint(str)
{
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
	document.getElementById("txtHint").style.border="1px solid #A5ACB2";
    }
  }
  //if(b =='s')
xmlhttp.open("GET","oldpassword.php?q="+str,true);
//else
//xmlhttp.open("GET","gethintfaculty.php?q="+str,true);
xmlhttp.send();
}

</script>
	</head>

	<body>

		<!-- NAVBAR -->

		<div class="navbar navbar-inverse">
			<div class="navbar-inner navbar-text">
				<a class="brand" href="#">Kalam</a>
			<!--	<ul class="nav">
					<li class="navbar-text"><a href="index.php">Home</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Objective</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="teams.php">Teams</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="subsystem.php">Subsystems</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Timeline</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Gallery</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Contact Us</a></li>
					<li class="divider-vertical"></li>
					<li class="active navbar-text"><a href="#">Student</a></li>
				</ul>-->
				<ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="navbar-text"><a href="logout.php">Logout</a></li>
	            </ul>
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
		<div id="container">
		<div class="hero-unit">
  			<div align="center">
  				<form action="change_password_process.php"method="post">
				<table>
				<tr><td>OLDPASSWORD</td><td><input type="password"onkeyup="showHint(this.value)"name="oldpassword"id="op"><span id="txtHint"></span></td></tr>
				<tr><td>NEWPASSWORD</td><td><input type="password"name="newpassword"id="np"><br/></td></tr>
				<tr><td>CONFIRMNEWPASSWORD</td><td><input type="password"onchange="cmp(this.value)"name="confirmnewpassword"id="cnp"></td></tr>
				</table>
				<div class="control-group">
  					<div class="controls">
  						<button class="btn btn-large btn-danger">Change</button>
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