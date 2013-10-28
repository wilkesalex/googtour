<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Googtour</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

<!-- include bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
<!-- include your styles -->
	<link rel="stylesheet" href="assets/css/main.css">

<!-- include modernizer -->
	<script src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js">
	</script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Googtour <span class="badge">BETA</span></a> 
			<div class="nav-collapse collapse">
				<div class="pull-right">
				</div>
				<ul class="nav">
					<li class="divider-vertical"></li>
					<li class="active"><a href="index.php">Home</a></li>
					<li class="divider-vertical"></li>
					<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ROUTES<b class="caret"></b></a> 
					<ul class="dropdown-menu">
						<li><a href="index.php?qm=1">Crowthorne High Street</a></li>
						<li><a href="index.php?qm=2#51.499099,-0.104735,51.522096,-0.106945,51.522096,-0.106945,2">Lambeth to Farringdon</a></li>
						<li><a href="index.php?qm=3#51.482131,-0.179558,51.497736,-0.14883,51.497736,-0.14883,1">Chelsea</a></li>
						<li><a href="index.php?qm=4#51.492072,-0.282211,51.510025,-0.00618,51.510025,-0.00618,0">Across London in 5 secs</a></li>
						<li class="divider"></li>
						<li><a href="index.php?qm=5#40.735551,-73.98983,40.809505,-73.935864,40.809505,-73.935864,0">Park Ave, New York</a></li>
						<li><a href="index.php?qm=6#40.706929,-74.015837,40.753889,-74.007168,40.753889,-74.007168,0">West St, New York</a></li>
						<li><a href="index.php?qm=7#48.865604,2.32069,48.887069,2.253571,48.887069,2.253571,0">Champs-Élysées, Paris</a></li>
						<li><a href="index.php?qm=8#52.527005,13.387098,52.500941,13.391519,52.500941,13.391519,1">Friedrichstraße, Berlin</a></li>
						<li><a href="index.php?qm=9#-22.910412,-43.207684,-22.900292,-43.176184,-22.900292,-43.176184,0">Av. Pres. Vargas, Rio de Janeiro</a></li>
						<li><a href="index.php?qm=10#44.563077,15.02243,44.419069,15.134354,44.485729,15.122681,1">Cesarica to Mazurani, Croatia</a></li>
							<li><a href="index.php?qm=11#35.347931,-86.344106,35.225008,-86.422749,35.225008,-86.422749,0">Lynchburg Highway, Tennessee</a></li>
							
								<li><a href="index.php?qm=12#35.287684,-86.368847,35.281833,-86.366862,35.283883,-86.372709,200,248">JD Factory, Tennessee (slower)</a></li>
								
								<li><a href="index.php?qm=13#51.582563,-9.353485,51.568294,-9.364257,51.568294,-9.364257,0,150">Skeagh, Ireland</a></li>
								
								
					</ul>
					</li>
					<li class="divider-vertical"></li>
					<li><a href="javascript:void(0);" id="mapbtn">Map (Experimental) &raquo;</a></li>
				</ul>
			</div>

<!--/.nav-collapse -->
		</div>
	</div>
</div>
<div id="pano" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; z-index:-1;">
</div>

<div class="container-fluid">
	<div class="row">
		<div class="span4">
			<div class="well" style='-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";filter: alpha(opacity=50);-moz-opacity:0.5;-khtml-opacity: 0.5;opacity: 0.5;margin-top:50px;'>
<small>You need an up-to-date <strong>Firefox or Google Chrome</strong> (WebGL).<br/><strong>Click and hold with your mouse to change the viewpoint!</strong><br/><strong><a href="https://twitter.com/deskofwilkes" title="Twitter">@deskofwilkes</a></strong> for suggested routes (see menu).</small>
		<pre id="text">
		
If nothing happens then your browser doesn't support Googtour
		
</pre>
		
		
	</div>
	<div id="myModal" class="well" style="display:none;">
			<div class="modal-header">
				<button type="button" class="btn pull-right" id="modalcloser">×</button> 
				<h2 id="myModalLabel">
					Find a place
				</h2>
			</div>
			<div class="modal-body">
				<div class="row-fluid">
					<div class="span12">

<!-- 
	 <div id="loader" class=" text-center"><h1>Just loading...</h1><br/>
                <img src="ajax-loader.gif" width="128" height="15" alt="ajax-loader" /><hr/>
                </div> 
 -->
						<div id="controls" style="">
							<p>
								.<br />
								Search for a place. Then click "drop_pins".<br />
								Then adjust the markers. You have 3 markers:
							</p>
							<ul>
								<li>A start point</li>
								<li>An end point</li>
								<li>Where you're looking</li>
							</ul>
							<form id="map_form" class="form-horizontal">
								<input type="text" name="address" id="address" />
								<button class="btn btn-primary " type="submit" id="searchButton">Search</button> 
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

	<div id="map" style="width: 400px; height: 400px; padding: 0;">
		</div>	
		
	
</div>
</div>
<!-- /container -->
<?php
$labsft = file_get_contents("http://labs.alex-wilkes.com/inc/labs_footer.inc");
echo $labsft;
?>


<!--/.navbar -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script>
window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')
</script>
<script src="assets/js/bootstrap.min.js">
</script>
<script src="assets/js/plugins.js">
</script>
<script src="assets/js/main.js">
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false" type="text/javascript">
</script>
<script src="js/dat.gui.min.js">
</script>
<script src="js/three.min.js">
</script>
<script src="js/GSVPano.js">
</script>
<script src="js/Hyperlapse.js">
</script>
<script src="js/googtour.js">
</script>
<script src="js/labs.js">
</script>
<!--   -->
</body>
</html>
