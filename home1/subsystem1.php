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
				<a class="brand" href="#">NITR Student Satellite Project</a>
				<ul class="nav">
					<li class="navbar-text"><a href="index.php">Home</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Objective</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="teams.php">Teams</a></li>
					<li class="divider-vertical"></li>
					<li class="active navbar-text"><a href="subsystem.php">Subsystems</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Timeline</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Gallery</a></li>
					<li class="divider-vertical"></li>
					<li class="navbar-text"><a href="#">Contact Us</a></li>
				</ul>
				<ul class="nav pull-right">
                    <li class="divider-vertical"></li>
                    <li class="dropdown navbar-text">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</b></a>
	                    <ul class="dropdown-menu">
	                        <form class="form-label" action="success.html" >
  								<fieldset>
  									<legend>Login Details</legend>
  									<input type="text" placeholder="Login ID">
  									<input type="password" placeholder="Password">
  									<select class="form-control">
  										<option value="admin">Admin</option>
  										<option value="faculty-c">Faculty Coordinator</option>
  										<option value="faculty">Faculty</option>
  										<option value="student-c">Student Coordinator</option>
  										<option value="student">Student</option>
									</select>
  									<button type="submit" class="btn btn-primary">Login</button>
  								</fieldset>
							</form>
	                    </ul>
	                </li>
	            </ul>
			</div>
		</div>

		<!-- HERO CONTENT -->
		<!--
		<div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="active"><a href="#powersupply" data-toggle="tab"><i class="icon-chevron-right"></i> Power supply</a></li>
          <li><a href="#payload" data-toggle="tab"><i class="icon-chevron-right"></i>Payload</a></li>
          <li><a href="#acs" data-toggle="tab"><i class="icon-chevron-right"></i>ACS</a></li>
          <li><a href="#navs" data-toggle="tab"><i class="icon-chevron-right"></i> Navs</a></li>
          <li><a href="#navbar" data-toggle="tab"><i class="icon-chevron-right"></i> Navbar</a></li>
          <li><a href="#breadcrumbs" data-toggle="tab"><i class="icon-chevron-right"></i> Breadcrumbs</a></li>
          <li><a href="#pagination" data-toggle="tab"><i class="icon-chevron-right"></i> Pagination</a></li>
          <li><a href="#labels-badges" data-toggle="tab"><i class="icon-chevron-right"></i> Labels and badges</a></li>
          <li><a href="#typography" data-toggle="tab"><i class="icon-chevron-right"></i> Typography</a></li>
          <li><a href="#thumbnails" data-toggle="tab"><i class="icon-chevron-right"></i> Thumbnails</a></li>
          <li><a href="#alerts" data-toggle="tab"><i class="icon-chevron-right"></i> Alerts</a></li>
          <li><a href="#progress" data-toggle="tab"><i class="icon-chevron-right"></i> Progress bars</a></li>
          <li><a href="#media" data-toggle="tab"><i class="icon-chevron-right"></i> Media object</a></li>
          <li><a href="#misc" data-toggle="tab"><i class="icon-chevron-right"></i> Misc</a></li>
        </ul>
      </div>
		<div class="container">
		<div class="hero-unit">
            <div id="myTabContent" class="tab-content">
            	<div class="tab-pane fade in active" id="powersupply">
                	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              	</div>
            	<div class="tab-pane fade" id="payload">
                	<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
              	</div>
              	<div class="tab-pane fade" id="acs">
                	<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
	              </div>
    	          <div class="tab-pane fade" id="navs">
        	        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
            	</div>
            </div>
		</div>
		</div>
		</div>
         -->
         <div class="tabbable tabs-left">
          <ul class="nav nav-tabs">
             <li class="active"><a href="#powersupply" data-toggle="tab"><i class="icon-chevron-right"></i> Power supply</a></li>
          <li><a href="#payload" data-toggle="tab"><i class="icon-chevron-right"></i>Payload</a></li>
          <li><a href="#acs" data-toggle="tab"><i class="icon-chevron-right"></i>ACS</a></li>
          <li><a href="#navs" data-toggle="tab"><i class="icon-chevron-right"></i> Navs</a></li>
          <li><a href="#navbar" data-toggle="tab"><i class="icon-chevron-right"></i> Navbar</a></li>
          <li><a href="#breadcrumbs" data-toggle="tab"><i class="icon-chevron-right"></i> Breadcrumbs</a></li>
          <li><a href="#pagination" data-toggle="tab"><i class="icon-chevron-right"></i> Pagination</a></li>
          <li><a href="#labels-badges" data-toggle="tab"><i class="icon-chevron-right"></i> Labels and badges</a></li>
          <li><a href="#typography" data-toggle="tab"><i class="icon-chevron-right"></i> Typography</a></li>
          <li><a href="#thumbnails" data-toggle="tab"><i class="icon-chevron-right"></i> Thumbnails</a></li>
          <li><a href="#alerts" data-toggle="tab"><i class="icon-chevron-right"></i> Alerts</a></li>
          <li><a href="#progress" data-toggle="tab"><i class="icon-chevron-right"></i> Progress bars</a></li>
          <li><a href="#media" data-toggle="tab"><i class="icon-chevron-right"></i> Media object</a></li>
          <li><a href="#misc" data-toggle="tab"><i class="icon-chevron-right"></i> Misc</a></li>
          </ul>
          <div class="container">
		<div class="hero-unit">
            <div id="myTabContent" class="tab-content">
            	<div class="tab-pane fade in active" id="powersupply">
                	<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
              	</div>
            	<div class="tab-pane fade" id="payload">
                	<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
              	</div>
              	<div class="tab-pane fade" id="acs">
                	<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
	            </div>
    	          <div class="tab-pane fade" id="navs">
        	        <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
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