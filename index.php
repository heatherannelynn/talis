<!DOCTYPE html>
<html style="scroll-behavior:smooth !important" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta property="og:image" content="https://sitesappsimages.com/assets/images/thumb.png" />
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
<link rel="icon" type="image/png" href="https://sitesappsimages.com/doggiehugs/assets/icons/mini_logo_cc.png">
<!-- USING BOOTSTRAP 4-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="icon" type="image/png" href="icon.png">
<!-- THESE ARE FOR JQUERY MOBILE  / NOT RUNNING
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
<style>
html, body {
	font-family: Montserrat, sans-serif;
	font-size:14px;
	width:100%;
	height:auto;
	margin:auto;
	text-align:center;
}
 textarea {
    width:100%;
    height:auto;
    margin:auto;
   }


.starrating > input {display: none;}  /* Remove radio buttons */

.starrating > label:before {
  content: "\f005"; /* Star */
  margin: .4px;
  font-size: 1em;
  font-family: FontAwesome;
  display: inline-block;
}

.starrating > label
{
  color: #222222; /* Start color when not clicked */
}

.starrating > input:checked ~ label
{ color: #ffca08 ; } /* Set yellow color when star checked */

.starrating > input:hover ~ label
{ color: #ffca08 ;  } /* Set yellow color when star hover */




section {
	padding:16px;
	width:100%;
	text-align:center;
	vertical-align:text-top;
	background-color:#dfece7;
	height:auto;
	margin:auto;
	display:float;
	margin-top:2px;
	color:#000;
	font-family: Montserrat, sans-serif;
	}

input {
	font-family: Montserrat, sans-serif;
	font-size:2em;
	padding:12px;
	}


h3 {
	color:#000;
	font-family: Montserrat, sans-serif;
	font-size:2em;
	}

h4 {
	//padding-top:90px;
	color:#333;
	font-family: Montserrat, sans-serif;
	font-size:1.4em;
	}

.para
	font-family: Montserrat, sans-serif;
	font-size:1em;
}


.top-container {
  background-color: #232323;
  padding: 0px;
  font-weight:500;
  text-align: center;
  z-index: 8888;
  width:100%;
}

.header {
  //padding: 10px 16px;
  background: #fff;
  border-bottom: 5px solid silver;
  color: #f1f1f1;
  font-family: Montserrat, sans-serif;
  z-index: 8888;
}

.navbar {
 color: #f1f1f1;
}

.navbar li {
 padding-left:.7em;
 padding-right:.7em;
 font-family: Montserrat, sans-serif;
}

.lead {
 font-family: Montserrat, sans-serif;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  font-family: Montserrat, sans-serif;
}

.sticky + .content {
  //padding-top: 102px;
  font-family: Montserrat, sans-serif;

}
img {
	max-width:100%;
	height:auto;
}
.bg-custom {
    background-color:transparent;
}

.spaces {
    padding-right:2px !important;
}

td {
	text-align:left;
}
label {
    font-family:Montserrat, sans-serif;
    justify-content:left;
    font-size:.9em;
    margin-left: 4px;
}

table {
	width:100%;
	margin:auto;
	justify-content:center;
}

.addSpace {
	padding-top:14px;
}
</style>

</head>

<body>

<!-- BOOTSTRAP4 UI CLASSES / INCORP HERE LAST -->
<nav class="navbar navbar-default"></nav> <!-- Dummy nav bar -->
<nav class="header sticky-top navbar navbar-expand-lg navbar-light bg-light">
	  <button id="menuButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span><img src="https://sitesappsimages.com/doggiehugs/assets/images/logo_white.png" width="40" /></span>
	  </button>
	  <div class="collapse navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse.show"  id="navbarTogglerDemo01">
	  <li class="hidden-sm"><a id="imgBrand" class="navbar-brand" href="https://www.sitesappsimages.com/doggiehugs/admin/fundraiserTool.php"><img src="http://sitesappsimages.com/doggiehugs/assets/images/logo_white.png" width="70" /></a></li>
	   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		  <li class="nav-item">
			<a class="nav-link active" href="healthApp.php">Profiles</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="manageAlarm.php">Alarms</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="manageMeds.php">Prescriptions</a>
		  </li>
		  <!--<li class="nav-item">
			<a class="nav-link" href="addPrescript.php">Prescriptions</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link disabled" href="manageCerts.php">Certificates</a>
		  </li>-->
		 <li class="nav-item">
			<a class="nav-link disabled" href="manageScreens.php">Screenings</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link disabled" href="manageShots.php">Shots</a>
		  </li>
		  <li class="nav-item">
		  <a class="nav-link disabled" href="manageDental.php">Dental</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link disabled" href="#adoption">Contacts</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link disabled" href="#contacts">Reports</a>
		  </li>

		 <!-- <li class="nav-item">
			<a class="nav-link" href="#totalCost">Costs for Care</a>
		  </li>-->
		</ul>
	  </div> <!-- navbar-->
	</nav>



<!-- APP DESCRIPTION/FAST FRIENDS/MEDICAL ALERT-->

<!--This app will maintain an accurate and timely status on the health and
well-being of the kennel population, provide a medical alert for each dog as necessary, and
track associated costs per dog for financial planning purposes. It will allow authorized
personnel to get an immediate, up-to-date status on the welfare of an individual dog or that
of the entire kennel population.</p>-->



<?php
include('ff_connect.php');
?>

<div class="container-fluid">
<div class="addSpace"></div>
<div class="d-flex col-12 justify-content-center">



	<form method="post" action="healthApp.php" id="authentMe">
	<div style="padding:16px;background:#dfece7;" class="table">
			<div class="row">
				<div class="col">Email</div><div class="col"><input class="form-control" type="text" name="signinName" style="min-width:15em;width:15em;max-width:15em;" value="<?php echo $signinName; ?>" /></div>
			</div>
			<div style="padding-top:4px;" class="row">
				<div class="col">Password</div><div class="col"><input class="form-control" type="text" name="signinPass" style="min-width:15em;width:15em;max-width:15em;" value="<?php echo $signinPass; ?>" /></div>
			</div>
		</div>
			<div style="padding-top:4px;" class="table">
			<div class="row">
				<div class="col"><button id="signIn" class="btn btn-secondary" id="signIn">Sign In</button></div>
			</div>
		</div>
	</div>
	</form>
</div>
</div>
</div>
<!--BOOTSTRAP4 COMPONENTS NEED THIS PLACED RIGHT ABOVE CLOSING BODY TAG-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
