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
					<li class="navbar-text"><a href="mission.php"><i class="icon-star icon-white"></i>Objective</a></li>
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

		<!-- HERO CONTENT -->
		<div class="container">
		<div class="hero-unit">
  			<table class="table table-striped">
  				<caption><h3>Faculty Member List</h3></caption>
  				<thead>
    				<tr>
      					<th>#</th>
      					<th>Subsystem</th>
      					<th>Faculty</th>
      					<th>Department</th>
      					<th>Mail-ID</th>
    				</tr>
  				</thead>
  				<tbody>
    				<tr>
      					<td>1</td>
      					<td>Structure</td>
      					<td>Prof. Pradip Sarkar</td>
      					<td>CE</td>
      					<td>sarkarp@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>2</td>
      					<td>Structure</td>
      					<td>Prof. Subrata Panda</td>
      					<td>ME</td>
      					<td>pandask@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>3</td>
      					<td>Structure</td>
      					<td>Prof. S. K. Sahu</td>
      					<td>CE</td>
      					<td>sksahu@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>4</td>
      					<td>Structure</td>
      					<td>Prof. Priyabrat Dash</td>
      					<td>CY</td>
      					<td>dashp@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>5</td>
      					<td>Thermal</td>
      					<td>Prof. Suman Ghosh</td>
      					<td>ME</td>
      					<td>ghoshs@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>6</td>
      					<td>Thermal</td>
      					<td> Prof. Subrata Panda</td>
      					<td>ME</td>
      					<td>pandask@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>7</td>
      					<td>Thermal</td>
      					<td>Prof. M. K. Moharana</td>
      					<td>ME</td>
      					<td>moharanam@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>8</td>
      					<td>Power System</td>
      					<td>Prof. Sandip Ghosh</td>
      					<td>EE</td>
      					<td>sandipg@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>9</td>
      					<td>Power System</td>
      					<td>Prof. Somnath Maity</td>
      					<td>EE</td>
      					<td>somnathm@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>10</td>
      					<td>Power System</td>
      					<td>Prof. Susovon Samanta</td>
      					<td>EE</td>
      					<td>samantas@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>11</td>
      					<td>Power System</td>
      					<td>Prof. S. Karmakar</td>
      					<td>EE</td>
      					<td>karmakars@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>12</td>
      					<td>R. F. System</td>
      					<td>Prof. P. K. Sahu</td>
      					<td>EE</td>
      					<td>pksahu@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>13</td>
      					<td>R. F. System</td>
      					<td>Prof. S. K. Patra</td>
      					<td>EC</td>
      					<td>skpatra@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>14</td>
      					<td>R. F. System</td>
      					<td>Prof. S. K. Behera</td>
      					<td>EC</td>
      					<td>skbehera@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>15</td>
      					<td>On board Computer</td>
      					<td>Prof. D. P. Acharya</td>
      					<td>EC</td>
      					<td>dpacharya@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>16</td>
      					<td>On board Computer</td>
      					<td>Prof. A K. Swain</td>
      					<td>EC</td>
      					<td>swaina@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>17</td>
      					<td>On board Computer</td>
      					<td>Prof. P. K. Tiwari</td>
      					<td>EC</td>
      					<td>tiwarip@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>18</td>
      					<td>On board Software</td>
      					<td>Prof. A. K. Turuk</td>
      					<td>CS</td>
      					<td>akturuk@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>19</td>
      					<td>On board Software</td>
      					<td>Prof. S. K. Das</td>
      					<td>EC</td>
      					<td>dassk@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>20</td>
      					<td>On board Software</td>
      					<td>Prof. K. Satyababu</td>
      					<td>CS</td>
      					<td>ksathyababu@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>21</td>
      					<td>ACS</td>
      					<td>Prof.  J. Srinivasa</td>
      					<td>ME</td>
      					<td>srinivasj@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>22</td>
      					<td>ACS</td>
      					<td>Prof.  Anirban Mitra</td>
      					<td>ME</td>
      					<td>mitraa@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>23</td>
      					<td>ACS</td>
      					<td>Prof.  S. Murugan</td>
      					<td>ME</td>
      					<td>murugans@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>24</td>
      					<td>Sensors</td>
      					<td>Prof. D. K. Bisoyi</td>
      					<td>PH</td>
      					<td>dkbisoyi@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>25</td>
      					<td>Sensors</td>
      					<td>Prof. T. K. Dan</td>
      					<td>EC</td>
      					<td>dkbisoyi@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>26</td>
      					<td>Sensors</td>
      					<td>Prof. Jyoti Prakash Kar</td>
      					<td>PH</td>
      					<td>karjp@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>27</td>
      					<td>Actuators</td>
      					<td>Prof. Suman Ghosh</td>
      					<td>ME</td>
      					<td>ghoshs@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>28</td>
      					<td>Actuators</td>
      					<td>Prof.  Susovon Samanta</td>
      					<td>EE</td>
      					<td>samantas@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>29</td>
      					<td>Actuators</td>
      					<td>Prof. Gopal Krishna</td>
      					<td>ME</td>
      					<td>srungavarapug@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>30</td>
      					<td>Ground Segment</td>
      					<td>Prof. A. K. Sahoo</td>
      					<td>EC</td>
      					<td>ajitsahoo@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>31</td>
      					<td>Ground Segment</td>
      					<td>Prof. P. Singh</td>
      					<td>EC</td>
      					<td>psingh@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>32</td>
      					<td>Ground Segment</td>
      					<td>Prof. L. P. Roy</td>
      					<td>EC</td>
      					<td>royl@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>33</td>
      					<td>Ground Segment</td>
      					<td>Prof. U. K. Sahoo</td>
      					<td>EC</td>
      					<td>sahooupen@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>34</td>
      					<td>Payload</td>
      					<td>Prof. B. Majhi</td>
      					<td>CS</td>
      					<td>bmajhi@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>35</td>
      					<td>Payload</td>
      					<td>Prof. S. Meher</td>
      					<td>EC</td>
      					<td>smeher@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>36</td>
      					<td>Payload</td>
      					<td>Prof. R. Jha</td>
      					<td>CE</td>
      					<td>ramakarj@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>37</td>
      					<td>Payload</td>
      					<td>Prof. S. Chakraverty</td>
      					<td>MA</td>
      					<td>chakravertys@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>38</td>
      					<td>Payload</td>
      					<td>Prof. Samit Ari</td>
      					<td>EC</td>
      					<td>samit@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>39</td>
      					<td>Payload</td>
      					<td>Prof. P. K. Sa</td>
      					<td>CS</td>
      					<td>pankajksa@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>40</td>
      					<td>Payload</td>
      					<td> Prof. L. P. Roy</td>
      					<td>EC</td>
      					<td>royl@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>41</td>
      					<td>Payload</td>
      					<td>Prof. S. Chatterjee</td>
      					<td>MN</td>
      					<td>chatterjeesn@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>--</td>
      					<td>--------------</td>
      					<td>--------------------------</td>
      					<td>--</td>
      					<td>----------------</td>
    				</tr>
    				<tr>
      					<td>42</td>
      					<td>R Q&A</td>
      					<td>Prof. S. K. Patel</td>
      					<td>ME</td>
      					<td>skpatel@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>43</td>
      					<td>R Q&A</td>
      					<td>Prof. S. Biswas</td>
      					<td>ME</td>
      					<td>srb@nitrkl.ac.in</td>
    				</tr>
    				<tr>
      					<td>44</td>
      					<td>R Q&A</td>
      					<td>Prof. S. S. Mahapatra</td>
      					<td>ME</td>
      					<td>ssm@nitrkl.ac.in</td>
    				</tr>
  				</tbody>
			</table>
		</div>

		<div class="hero-unit">
			<div align="center">
				<div class="btn-group">
  					<a class="btn btn-large btn-primary" href="student-list.docx">
    					Download Student Member List
  					</a>
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