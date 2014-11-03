<!DOCTYPE html>
<html>
<head>

<style>
body {
	margin:0;
	width:100%;
	background-color:#CDD3D0;
}

#logo_wrapper {
	position:absolute;
	top:5%;
	left:0%;
	width:100%;
	height:76px;
}

#logo_wrapper, #header_label {
	display:block;
	margin:auto;
}

#nav_wrapper {
	width:25%;
	position:absolute;
	left:37.5%;
	height:45%;
	top:15%;
}

#nav_bar {
	display:inline;
	list-style-type:none;
	text-align:center;
}

li {
	padding:5%;
}

#wedo_nav, #contact_nav {
	width:80%;
	
}

li {
	margin:5px;
	background-color:#CDD3D0;
	border-radius:6px;
	transition-properties:background-color;
	transition-duration:0.3s;
	transition-timing-function:linear;
}

li:hover {
	background-color:#AECEBE;
}

#turnwheel {
	position:absolute;
	top:40%;
	width:100%;
	height:50%;
	background-color:red;
}

#footer {
	position:absolute;
	background-color:blue;
	height:10%;
	width:100%;
	top:90%; 
}

button {
	border:none;
	padding:3px;
	margin:none;
	width:20%;
	height:100%;
	position:absolute;
	top:0;
	transition-properties:background-color;
	transition-duration:0.3s;
	transition-timing-function:linear;
}

button:hover {
	background-color:purple;
}
</style>

<body>

<div id="logo_wrapper">
	<img src="casp_header@2x.png" id="header_label" alt="Header" width="574px" height="76px">
</div>

<div id="nav_wrapper">
	<ul id="nav_bar">
		<li><img src="whatwedo_nav@2x.png" alt="What We Do" id="wedo_nav"></li>
		<li><img src="contact_nav@2x.png" alt="Contact" id="contact_nav"></li>
	</ul>
</div>

<div id="turnwheel">
	<?php
		$infoArray = array("My name is Noah", "Your name is poop", "Poopy smells");
		for ($i = 0; $i <= 3; $i++) {
			//echo $infoArray[$i];
		}
	?>
</div>

<div id="footer">
	<button style="left:10%;"><img src="jobs_footer@2x.png" alt="Jobs"></button>
	<button style="left:40%;"><img src="about_footer@2x.png" alt="About Us"></button>
	<button  style="left:70%;"><img src="team_footer@2x.png" alt="Our Team"></button>
</div>

</body>

</head>
</html>