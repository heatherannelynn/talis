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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
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
	font-family: Montserrat, sans-serif;
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
</style>

</head>

<body>

<div class="container-fluid">
<nav class="navbar navbar-default"></nav> <!-- Dummy nav bar -->
<nav class="header sticky-top navbar navbar-expand-lg navbar-light bg-light">
	  <button id="menuButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span><img src="../assets/images/logo_white.png" width="40" /></span>
	  </button>
	  <div class="collapse navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse.show"  id="navbarTogglerDemo01">
	  <li class="hidden-sm"><a id="imgBrand" class="navbar-brand" href="../campaigns/index.php"><img src="../../assets/images/logo_white.png" width="70" /></a></li>
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




<!--This app will maintain an accurate and timely status on the health and
well-being of the kennel population, provide a medical alert for each dog as necessary, and
track associated costs per dog for financial planning purposes. It will allow authorized
personnel to get an immediate, up-to-date status on the welfare of an individual dog or that
of the entire kennel population.</p>-->



<?php
include('../../../doggiehugs/admin/ff_connect.php');

if($_POST['save_changes']) {

//var_dump($_POST);
//die;
$dogName=$_POST['dogName'];
$dogID=$_POST['dogID'];
$thisid=$_POST['thisid'];


if(isset($_POST['illnessType1'])) {$illnessType1='true';} else {$illnessType1='false'; }
if(isset($_POST['illnessType2'])) {$illnessType2='true';} else {$illnessType2='false'; }
if(isset($_POST['illnessType3'])) {$illnessType3='true';} else {$illnessType3='false'; }
if(isset($_POST['illnessType4'])) {$illnessType4='true';} else {$illnessType4='false'; }
if(isset($_POST['illnessType5'])) {$illnessType5='true';} else {$illnessType5='false'; }
if(isset($_POST['illnessType6'])) {$illnessType6='true';} else {$illnessType6='false'; }
if(isset($_POST['illnessType7'])) {$illnessType7='true';} else {$illnessType7='false'; }
if(isset($_POST['illnessType8'])) {$illnessType8='true';} else {$illnessType8='false'; }
if(isset($_POST['illnessType9'])) {$illnessType9='true';} else {$illnessType9='false'; }
if(isset($_POST['illnessType10'])) {$illnessType10='true';} else {$illnessType10='false'; }
if(isset($_POST['illnessType11'])) {$illnessType11='true';} else {$illnessType11='false'; }
if(isset($_POST['illnessType12'])) {$illnessType12='true';} else {$illnessType12='false'; }
if(isset($_POST['illnessType13'])) {$illnessType13='true';} else {$illnessType13='false'; }
if(isset($_POST['illnessType14'])) {$illnessType14='true';} else {$illnessType14='false'; }
if(isset($_POST['illnessType15'])) {$illnessType15='true';} else {$illnessType15='false'; }
if(isset($_POST['illnessType16'])) {$illnessType16='true';} else {$illnessType16='false'; }
if(isset($_POST['illnessType17'])) {$illnessType17='true';} else {$illnessType17='false'; }
if(isset($_POST['illnessType18'])) {$illnessType18='true';} else {$illnessType18='false'; }
if(isset($_POST['illnessType19'])) {$illnessType19='true';} else {$illnessType19='false'; }
if(isset($_POST['illnessType20'])) {$illnessType20='true';} else {$illnessType20='false'; }
if(isset($_POST['illnessType21'])) {$illnessType21='true';} else {$illnessType21='false'; }



// TODO  Add the rest of the form fields to update db table
$mysqli->query("update ff_healthapp set dogName='$dogName' where id='$thisid'");
//UPDATE `ff_illnesses` SET `illnessType1` = '' WHERE `ff_illnesses`.`id` = 1;


$mysqli->query("update ff_illnesses set illnessType1='$illnessType1', illnessType2='$illnessType2', illnessType3='$illnessType3',
 illnessType4='$illnessType4', illnessType5='$illnessType5', illnessType6='$illnessType6', illnessType7='$illnessType7',
illnessType8='$illnessType8', illnessType9='$illnessType9', illnessType10='$illnessType10', illnessType11='$illnessType11',
illnessType12='$illnessType12', illnessType13='$illnessType13', illnessType14='$illnessType14', illnessType15='$illnessType15',
illnessType16='$illnessType16', illnessType17='$illnessType17', illnessType18='$illnessType18', illnessType19='$illnessType19',
illnessType20='$illnessType20', illnessType21='$illnessType21' where dogID='$dogID'");


}

if($_POST['getProfile']){

$thisid=$_POST['thisid'];
//var_dump($_POST);


			$res7 = $mysqli->query("SELECT * FROM ff_healthapp where id='$thisid'");
					if($myrow7=$res7->fetch_object()){
						do {
					$thisid=$myrow7->id;
					$dogID=$myrow7->dogID;
					$dogName=$myrow7->dogName;
					$arrivedOn=$myrow7->arrivedOn;
					$leftOn=$myrow7->leftOn;
					$dogWeight=$myrow7->dogWeight;
					$dateWeighed=$myrow7->dateWeighed;
					$dogBreed=$myrow7->dogBreed;
					$dogColor=$myrow7->dogColor;
					$dogGender=$myrow7->dogGender;
					$dogAge=$myrow7->dogAge;
					$dogOrigin=$myrow7->dogOrigin;
					$dateNeutered=$myrow7->dateNeutered;
					$behavior=$myrow7->behavior;
					$behaviorText=$myrow7->behaviorText;
					$health=$myrow7->health;
					$healthText=$myrow7->healthText;
					$dentalNotes=$myrow7->dentalNotes;
					$lastDentalExam=$myrow7->lastDentalExam;





printf('<form method="post" action="%s">',$PHP_SELF);

?>
<div class="container">
<!-- PROFILE -->
<br/><br/><br/>
<section>

<p class="lead">Profile Details</p>
<div class="table">

	<div class="row">
	<div class="col">Record ID</div><div class="col" name="id" value="<?php echo $thisid; ?>"></div></div>
	<div class="col">Name<input class="form-control" type="text" name="dogName" value="<?php echo $dogName; ?>"/></p></div>
	<div class="col">ID#<input class="form-control" type="text" name="dogID" value="<?php echo $dogID; ?>"></div>
	</div>

	<div class="row">
		<div class="col">
		Weight (lbs)
		</div>
		<div class="col">
		Weighed on:
		</div>
	</div>
	<div class="row">
		<div class="col">
		<input class="form-control" type="text" name="dogWeight" value="<?php echo $dogWeight; ?>">
		</div>
		<div class="col">
		<input class="form-control" type="date" name="dateWeighed" value="<?php echo $dateWeighed; ?>">
		</div>
	</div>



	<div class="table">
		<div class="row">
			<div class="col">Breed</div>
			<div class="col">Color</div>
		</div>
		<div class="row">
			<div class="col"><input class="form-control" type="text" name="dogColor" value="<?php echo $dogColor; ?>"></div>
			<div class="col"><input class="form-control" type="text" name="dogBreed" value="<?php echo $dogBreed; ?>"></div>
		</div>
	<div class="row">
		<div class="col">Age</div>
		<div class="col">Gender</div>
	</div>
	<div class="row">
		<div class="col"><input class="form-control" type="text" name="dogAge" value="<?php echo $dogAge; ?>"></div>
		<div class="col">
				<div class="table">
	<div class="row">
	<div class="col">
	<input type="radio" name="dogGender" >
	Male</div><div class="col"><input type="radio" name="dogGender" >Female</div>
	</div>

<!--<div class="table">
				<div class="row">
					<div class="col"><input class="form-control" type="radio" name="dogGender" value="checked">Male</div>
					<div class="col"><input class="form-control" type="radio" name="dogGender" >Female</div>
				</div>
			</div>-->
		</div>
	</div></div>
	</div>

	<p class="lead">Place of Origin</p>
	<input class="form-control" type="text" name="dogOrigin" />



	<!--<p class="lead">Date of Arrival</p>
	<input class="form-control" type="date" name="arrivalDate" />



	<p class="lead">Kennel History</p>
	<div class="lead">Kennel Name: <input type="text" name="kennelName"></div>-->
	<div class="table">
		<div class="row">
		<div class="col">Arrived On:</div>
		<div class="col">Left On:</div>
		</div>
		<div class="row">
		<div class="col"><input type="date" name="arrivedOn" class="form-control"></div>
		<div class="col"><input type="date" class="form-control" name="leftOn"></div>
		</div>
	</div>
	<div><p class="lead"><a href="#">Coming Soon - Manage Kennel History</a></p></div>

	<!--<p class="lead">Cost of Transport</p>
	<input class="form-control" type="text" name="transferCost" value="<?php echo $transferCost; ?>"></p>-->
</section>
</div>


<!-- DENTAL HISTORY -->
<div id="health" class="container">
<br/><br/><br/>
<section>
<?php

		//include('ff_connect.php');

		$res8 = $mysqli->query("SELECT * FROM ff_illnessTypes where id='1'");
					if($myrow8=$res8->fetch_object()){
						//do {
						$symptom1=$myrow8->illnessType1;
						$symptom2=$myrow8->illnessType2;
						$symptom3=$myrow8->illnessType3;
						$symptom4=$myrow8->illnessType4;
						$symptom5=$myrow8->illnessType5;
						$symptom6=$myrow8->illnessType6;
						$symptom7=$myrow8->illnessType7;
						$symptom8=$myrow8->illnessType8;
						$symptom9=$myrow8->illnessType9;
						$symptom10=$myrow8->illnessType10;
						$symptom11=$myrow8->illnessType11;
						$symptom12=$myrow8->illnessType12;
						$symptom13=$myrow8->illnessType13;
						$symptom14=$myrow8->illnessType14;
						$symptom15=$myrow8->illnessType15;
						$symptom16=$myrow8->illnessType16;
						$symptom17=$myrow8->illnessType17;
						$symptom18=$myrow8->illnessType18;
						$symptom19=$myrow8->illnessType19;
						$symptom20=$myrow8->illnessType20;
						$symptom21=$myrow8->illnessType21;

}


	$res6 = $mysqli->query("SELECT * FROM ff_illnesses where dogID='$dogID'");
					if($myrow6=$res6->fetch_object()){
						do {
						$illnessType1=$myrow6->illnessType1;
						$illnessType2=$myrow6->illnessType2;
						$illnessType3=$myrow6->illnessType3;
						$illnessType4=$myrow6->illnessType4;
						$illnessType5=$myrow6->illnessType5;
						$illnessType6=$myrow6->illnessType6;
						$illnessType7=$myrow6->illnessType7;
						$illnessType8=$myrow6->illnessType8;
						$illnessType9=$myrow6->illnessType9;
						$illnessType10=$myrow6->illnessType10;
						$illnessType11=$myrow6->illnessType11;
						$illnessType12=$myrow6->illnessType12;
						$illnessType13=$myrow6->illnessType13;
						$illnessType14=$myrow6->illnessType14;
						$illnessType15=$myrow6->illnessType15;
						$illnessType16=$myrow6->illnessType16;
						$illnessType17=$myrow6->illnessType17;
						$illnessType18=$myrow6->illnessType18;
						$illnessType19=$myrow6->illnessType19;
						$illnessType20=$myrow6->illnessType20;
						$illnessType21=$myrow6->illnessType21;



?>

	<p class="lead">Illness or Injury Signs</p>
	<p class="para">Check all which apply:</p>
	<table>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType1" <?php if($illnessType1 != 'false'){ echo "checked";}?> ><label for="illnessType1"><?php echo $symptom1; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType2" <?php if($illnessType2 != 'false'){ echo "checked";}?> ><label for="illnessType2"><?php echo $symptom2; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType3" <?php if($illnessType3 != 'false'){ echo "checked";}?> ><label for="illnessType3"><?php echo $symptom3; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType4" <?php if($illnessType4 != 'false'){ echo "checked";}?> ><label for="illnessType4"><?php echo $symptom4; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType5" <?php if($illnessType5 != 'false'){ echo "checked";}?> ><label for="illnessType5"><?php echo $symptom5; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType6" <?php if($illnessType6 != 'false'){ echo "checked";}?> ><label for="illnessType6"><?php echo $symptom6; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType7" <?php if($illnessType7 != 'false'){ echo "checked";}?> ><label for="illnessType7"><?php echo $symptom7; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType8" <?php if($illnessType8 != 'false'){ echo "checked";}?> ><label for="illnessType8"><?php echo $symptom8; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType9" <?php if($illnessType9 != 'false'){ echo "checked";}?> ><label for="illnessType9"><?php echo $symptom9; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType10" <?php if($illnessType10 != 'false'){ echo "checked";}?> ><label for="illnessType10"><?php echo $symptom10; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType11" <?php if($illnessType11 != 'false'){ echo "checked";}?> ><label for="illnessType11"><?php echo $symptom11; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType12" <?php if($illnessType12 != 'false'){ echo "checked";}?> ><label for="illnessType12"><?php echo $symptom12; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType13" <?php if($illnessType13 != 'false'){ echo "checked";}?> ><label for="illnessType13"><?php echo $symptom13; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType14" <?php if($illnessType14 != 'false'){ echo "checked";}?> ><label for="illnessType14"><?php echo $symptom14; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType15" <?php if($illnessType15 != 'false'){ echo "checked";}?> ><label for="illnessType15"><?php echo $symptom15; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType16" <?php if($illnessType16 != 'false'){ echo "checked";}?> ><label for="illnessType16"><?php echo $symptom16; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType17" <?php if($illnessType17 != 'false'){ echo "checked";}?> ><label for="illnessType17"><?php echo $symptom17; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType18" <?php if($illnessType18 != 'false'){ echo "checked";}?> ><label for="illnessType18"><?php echo $symptom18; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType19" <?php if($illnessType19 != 'false'){ echo "checked";}?> ><label for="illnessType19"><?php echo $symptom19; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType20" <?php if($illnessType20 != 'false'){ echo "checked";}?> ><label for="illnessType20"><?php echo $symptom20; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType21" <?php if($illnessType21 != 'false'){ echo "checked";}?> ><label for="illnessType21"><?php echo $symptom21; ?></label></td>
	</tr>
 	</table><br/>
	<div class="para">Please describe any other illness, injury or ailment not listed above, in the text area below.</div>

	<textarea class="mytextarea" name="illnessNotes">
	</textarea>
</section>


</div>

<?php

		} while($myrow6=$res6->fetch_object());
	}
?>
		
<!-- PHYSICAL HEALTH -->

<div id="health" class="container">
<br/><br/><br/>
<section>

	<!--<p class="lead">1. Health Rating</p>-->
	<h4>Health</h4>
	<p class="lead">Overall health rating</p>

	<!-- return -->
	<!--<input name="healthRating" type="radio">1
	<input name="healthRating" type="radio">2
	<input name="healthRating" type="radio">3
	<input name="healthRating" type="radio">4
	<input name="healthRating" type="radio">5-->

<div class="container">
        <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
            <input type="radio" id="star5" name="health" value="5" /><label for="star5" title="5 star"></label>
            <input type="radio" id="star4" name="health" value="4" /><label for="star4" title="4 star"></label>
            <input type="radio" id="star3" name="health" value="3" /><label for="star3" title="3 star"></label>
            <input type="radio" id="star2" name="health" value="2" /><label for="star2" title="2 star"></label>
            <input type="radio" id="star1" name="health" value="1" /><label for="star1" title="1 star"></label>
        </div>
  </div><p>Notes on Overall Health</p>
	<textarea class="mytextarea" name="healthText">
	</textarea>

<p class="lead"><a href="screenings.php">Coming Soon - Add Screening Information</a></p>


<!-- DENTAL HISTORY -->

<div id="health" class="container">
<br/><br/><br/>
<section>
<?php

		//include('ff_connect.php');

		$res8 = $mysqli->query("SELECT * FROM ff_illnessTypes where id='1'");
					if($myrow8=$res8->fetch_object()){
						//do {
						$symptom1=$myrow8->illnessType1;
						$symptom2=$myrow8->illnessType2;
						$symptom3=$myrow8->illnessType3;
						$symptom4=$myrow8->illnessType4;
						$symptom5=$myrow8->illnessType5;
						$symptom6=$myrow8->illnessType6;
						$symptom7=$myrow8->illnessType7;
						$symptom8=$myrow8->illnessType8;
						$symptom9=$myrow8->illnessType9;
						$symptom10=$myrow8->illnessType10;
						$symptom11=$myrow8->illnessType11;
						$symptom12=$myrow8->illnessType12;
						$symptom13=$myrow8->illnessType13;
						$symptom14=$myrow8->illnessType14;
						$symptom15=$myrow8->illnessType15;
						$symptom16=$myrow8->illnessType16;
						$symptom17=$myrow8->illnessType17;
						$symptom18=$myrow8->illnessType18;
						$symptom19=$myrow8->illnessType19;
						$symptom20=$myrow8->illnessType20;
						$symptom21=$myrow8->illnessType21;

}


	$res6 = $mysqli->query("SELECT * FROM ff_illnesses where dogID='$dogID'");
					if($myrow6=$res6->fetch_object()){
						do {
						$illnessType1=$myrow6->illnessType1;
						$illnessType2=$myrow6->illnessType2;
						$illnessType3=$myrow6->illnessType3;
						$illnessType4=$myrow6->illnessType4;
						$illnessType5=$myrow6->illnessType5;
						$illnessType6=$myrow6->illnessType6;
						$illnessType7=$myrow6->illnessType7;
						$illnessType8=$myrow6->illnessType8;
						$illnessType9=$myrow6->illnessType9;
						$illnessType10=$myrow6->illnessType10;
						$illnessType11=$myrow6->illnessType11;
						$illnessType12=$myrow6->illnessType12;
						$illnessType13=$myrow6->illnessType13;
						$illnessType14=$myrow6->illnessType14;
						$illnessType15=$myrow6->illnessType15;
						$illnessType16=$myrow6->illnessType16;
						$illnessType17=$myrow6->illnessType17;
						$illnessType18=$myrow6->illnessType18;
						$illnessType19=$myrow6->illnessType19;
						$illnessType20=$myrow6->illnessType20;
						$illnessType21=$myrow6->illnessType21;



?>

	<p class="lead">Illness or Injury Signs</p>
	<p class="para">Check all which apply:</p>
	<table>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType1" <?php if($illnessType1 != 'false'){ echo "checked";}?> ><label for="illnessType1"><?php echo $symptom1; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType2" <?php if($illnessType2 != 'false'){ echo "checked";}?> ><label for="illnessType2"><?php echo $symptom2; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType3" <?php if($illnessType3 != 'false'){ echo "checked";}?> ><label for="illnessType3"><?php echo $symptom3; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType4" <?php if($illnessType4 != 'false'){ echo "checked";}?> ><label for="illnessType4"><?php echo $symptom4; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType5" <?php if($illnessType5 != 'false'){ echo "checked";}?> ><label for="illnessType5"><?php echo $symptom5; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType6" <?php if($illnessType6 != 'false'){ echo "checked";}?> ><label for="illnessType6"><?php echo $symptom6; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType7" <?php if($illnessType7 != 'false'){ echo "checked";}?> ><label for="illnessType7"><?php echo $symptom7; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType8" <?php if($illnessType8 != 'false'){ echo "checked";}?> ><label for="illnessType8"><?php echo $symptom8; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType9" <?php if($illnessType9 != 'false'){ echo "checked";}?> ><label for="illnessType9"><?php echo $symptom9; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType10" <?php if($illnessType10 != 'false'){ echo "checked";}?> ><label for="illnessType10"><?php echo $symptom10; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType11" <?php if($illnessType11 != 'false'){ echo "checked";}?> ><label for="illnessType11"><?php echo $symptom11; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType12" <?php if($illnessType12 != 'false'){ echo "checked";}?> ><label for="illnessType12"><?php echo $symptom12; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType13" <?php if($illnessType13 != 'false'){ echo "checked";}?> ><label for="illnessType13"><?php echo $symptom13; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType14" <?php if($illnessType14 != 'false'){ echo "checked";}?> ><label for="illnessType14"><?php echo $symptom14; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType15" <?php if($illnessType15 != 'false'){ echo "checked";}?> ><label for="illnessType15"><?php echo $symptom15; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType16" <?php if($illnessType16 != 'false'){ echo "checked";}?> ><label for="illnessType16"><?php echo $symptom16; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType17" <?php if($illnessType17 != 'false'){ echo "checked";}?> ><label for="illnessType17"><?php echo $symptom17; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType18" <?php if($illnessType18 != 'false'){ echo "checked";}?> ><label for="illnessType18"><?php echo $symptom18; ?></label></td>
	</tr>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType19" <?php if($illnessType19 != 'false'){ echo "checked";}?> ><label for="illnessType19"><?php echo $symptom19; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType20" <?php if($illnessType20 != 'false'){ echo "checked";}?> ><label for="illnessType20"><?php echo $symptom20; ?></label></td>
	<td><input type="checkbox" class="checkbox-inline" name="illnessType21" <?php if($illnessType21 != 'false'){ echo "checked";}?> ><label for="illnessType21"><?php echo $symptom21; ?></label></td>
	</tr>
 	</table><br/>
	<div class="para">Please describe any other illness, injury or ailment not listed above, in the text area below.</div>

	<textarea class="mytextarea" name="illnessNotes">
	</textarea>
</section>


</div>

<?php

		} while($myrow6=$res6->fetch_object());
	}

?>
<!-- DENTAL HISTORY -->

<div style="display:none" id="screenings" class="container">
<br/><br/><br/>
<section>


	<p class="lead">Parasite Screenings</p>
	<p class="para">Check all completed screening types.</p>
	<table>
	<tr>
	<td><input type="checkbox" class="checkbox-inline" name="symptoms1" value="a"><label for="symptoms1">Roundworms</label></td>
	<td><input type="checkbox" class="checkbox-inline" name="symptoms2" value="b"><label for="symptoms2">Hookworms</label></td>
	<td><input type="checkbox" class="checkbox-inline" name="symptoms3" value="c"><label for="symptoms3">Coccidia spp.</label></td>
	<td><input type="checkbox" class="checkbox-inline" name="symptoms4" value="d"><label for="symptoms4">Heartworms</label></td>
	<td><input type="checkbox" class="checkbox-inline" name="symptoms5" value="e"><label for="symptoms5">Tapeworm</label></td>
	<td><input type="checkbox" class="checkbox-inline" name="symptoms6" value="f"><label for="symptoms6">Whipworm</label></td>
	</tr>
 	</table>

</section>


</div>

// TODO just have the link to manageMeds.php from the nav
//echo "<h4><a href='manageMeds.php'>Manage Medication Schedule for ".$dogName."</a></h4><br/>";



<!-- TODO pull this out into its own section -->
<div style="display:none" id="medication">

	<p class="lead">Medications</p>
	<p class="para">Prescribed by:<input class="lead form-control" type="text" name="prescribedBy" value="<?php echo $prescribedBy; ?>"></p>
	<p class="para">Dosage:<input class="form-control" type="text" name="dosage" value="<?php echo $dosage; ?>"></p>
	<p class="para">Time Interval<input class="form-control" type="text" name="dosageInterval" value="<?php echo $dosageInterval; ?>"></p>
	<p class="para">Date Given Last<input class="form-control" type="date" name="lastTimeGiven" value="<?php echo $lastTimeGiven ?>"></p>
	<p class="para">Given By Whom:<input class="form-control" type="text" name="givenBy" value="<?php echo $givenBy ?>"></p>
	<div><a href="#">Add Another Record</a></div>
</div>


<p class="lead"><a href="manageShots.php">Coming Soon - Manage Shots Schedule</a></p>
<!-- TODO pull this out into its own section -->

<div id="shots">

	<!-- TODO  BEGIN SUGGESTED SHOTS SCHEDULE DESIGN FORMAT -->
	<p class="lead">Shots Schedule</p>
	<p class="para"><a href="https://wsava.org/wp-content/uploads/2020/01/WSAVA-Vaccination-Guidelines-2015.pdf">Guidelines</a></p>
	<div><img src="vaxDiag.png" /></div>
	<div class="table">
		<div class="row">
			<div class="col">Type</div>
			<div class="col">Schedule</div>
		</div>
		<div class="row">
			<div class="col">CAV-1</div>
			<div class="col">11/22/2020</div>
		</div>
		<div class="row">
			<div class="col">CAV-2</div>
			<div class="col">11/22/2020</div>
		</div>
		<div class="row">
			<div class="col">CPV-2</div>
			<div class="col">11/22/2020</div>
		</div>
		<div class="row">
			<div class="col">CDV</div>
			<div class="col">11/22/2021</div>
		</div>
	</div>


	<input class="form-control" type="text" name="shotType" value="<?php echo $shotType; ?>">
	<select name="shotType"><option>Select One</option><option>CDV</option><option>CPV-2</option><option>CAV-1</option><option>CAV-2</option></select>
	<div  class="col">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
			<span class="input-group-text">$</span>
		  </div>
		  <input type="text" class="form-control" name="shotsCost" value="<?php echo $shotsCost; ?>" aria-label="Amount (to the nearest dollar)">
		  <div class="input-group-append">
			<span class="input-group-text">.00</span>
		  </div>
		</div>

	</div>
	<div  class="col">
	<input class="form-control" type="date" name="datesDue" value="<?php echo $datesDue; ?>">
	</div>
	<p class="para"><div><a href="#">Add Another Date</a></div></p>

	<div><a href="#">Add More</a></div>
</div>
	<div><p class="lead"><a href="#">Coming Soon - Manage Health Certs</a></p></div>

<div style="display:none" id="certs">
	<p class="lead">Health Certificate</p>
	<div class="table">
	<div class="row">
	<div class="col">Type</div>
	<div class="col">Cost</div>
	<div class="col">Generated</div>
	</div>
	<div class="row">
	<div  class="col">
	<input class="form-control" type="text" name="certType" value="<?php echo $certType; ?>">
	</div>
	<div  class="col">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
			<span class="input-group-text">$</span>
		  </div>
		  <input type="text" class="form-control" name="certCost" value="<?php echo $certCost; ?>" aria-label="Amount (to the nearest dollar)">
		  <div class="input-group-append">
			<span class="input-group-text">.00</span>
		  </div>
		</div>

	</div>
	<div  class="col">
	<input class="form-control" type="date" name="certsDue" value="<?php echo $certsDue; ?>">
	</div>
	</div>
	</div>

<div><a href="#">Medical History</a></div>

</section>
</div>


<!-- MENTAL HEALTH -->

<div id="behavior" class="container">
<br/><br/><br/>
<section>
	<h4>Behavior</h4>

	<p class="lead">Overall behavior rating</p>
<div class="container">
        <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
            <input type="radio" id="2star5" name="behavior" value="5" /><label for="2star5" title="5 star"></label>
            <input type="radio" id="2star4" name="behavior" value="4" /><label for="2star4" title="4 star"></label>
            <input type="radio" id="2star3" name="behavior" value="3" /><label for="2star3" title="3 star"></label>
            <input type="radio" id="2star2" name="behavior" value="2" /><label for="2star2" title="2 star"></label>
            <input type="radio" id="2star1" name="behavior" value="1" /><label for="2star1" title="1 star"></label>
        </div>
  </div><p>Notes on Overall Behavior</p>

    <textarea class="mytextarea" name="behaviorText">
	</textarea>

</section>
</div>

<!-- DENTAL HISTORY -->

<div id="dental" class="container">
<section>


	<p class="lead">Dental</p>
	<div class="table">
		<div class="row">
			<div class="col">Date of Last Exam:</div>
			<div class="col">Notes on Dental:</div>
		</div>
		<div class="row">
			<div class="col"><input class="form-control" type="date" name="lastDentalExam" value="<?php echo $lastDentalExam; ?>"></div>
			<div class="col"><textarea class="mytextarea" name="dentalNotes"></textarea></div>
		</div>
	</div>


</section>


</div>


?><!-- ADOPTION -->

<div style="display:none" id="adoption" class="container">
<br/><br/><br/>
<section>
<p class="lead">Adoption Status</p>
<div class="table">
<div class="row">
<div class="col">Meeting with Adopter Scheduled for:</div>
<div class="col">Adopter Name:</p></div>
</div>
<div class="row">
<div class="col">
<input class="form-control" type="date" name="dateMeetAdopter" value="<?php echo $dateMeetAdopter; ?>">
</div>
<div class="col">
<input class="form-control" type="text" name="adopterName" value="<?php echo $adopterName; ?>">
</div>
</div>
</div>
	<p>Notes on Adoption</p>
	<textarea class="mytextarea" name="meetingNotes">
	</textarea>

	<div class="table">
	<div class="row">
	<div class="col">
	<input type="radio" name="adoptionStatus" >
	On Hold</div><div class="col"><input type="radio" name="adoptionStatus" >Adopted</div>
	</div>
<!--	<div class="row">
	<div class="col">Date On Hold</div>
	<div class="col">Date Adopted</div>
	</div>--></div>
	<!--<div class="table">
	<div class="row">
	<div class="col">As of:<input type="date" class="form-control" name="dateOnHold" /></div>
	<div class="col">As of:<input type="date" class="form-control" name="dateAdopted" /></div>
	</div>
	</div>-->
	<!--<p class="para"><input class="form-control" type="date" name="datePlacedHold" value="<?php echo $datePlacedHold; ?>"></p>-->
	<div class="table">
	<div class="row">
	<div class="col">Date of Adoption</div>
	<div class="col">Adoption Fee</div>
	</div>
	<div class="row">
	<div class="col">
	<input class="form-control" type="date" name="dateAdopted" value="<?php echo $dateAdopted; ?>"></div>
	<div class="col"><input class="form-control" type="text" name="adoptFee" value="<?php echo $adoptFee; ?>"></div>
	</div>
	</div>
</section>
</div>		
<div id="totalCost" class="container">
<br/><br/><br/>
<section>

	<p class="lead">Total Cost of Dog</p>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
		<span class="input-group-text">$</span>
	  </div>
	  <input type="text" class="form-control" name="totalCostDog" value="<?php echo $totalCostDog; ?>" aria-label="Amount (to the nearest dollar)">
	  <div class="input-group-append">
		<span class="input-group-text">.00</span>
	  </div>
	</div>





</section>





</div>
		



		<!--   TODO  Fix this <p class="lead"><a href="adoption.php">Manage Adoption Status</a></p>-->
		<input style="font-size:1em;" type="submit" name="save_changes" value="Save Changes">
		<br/><br/>

		</form>
		</div>
		<?php

					}  while($myrow7=$res7->fetch_object());
				}
				echo "</div>";
			//$res7=$mysqli->free();
		$mysqli->query("INSERT INTO `ff_healthapp` ( `dogID`, `dogName`, `arrivedOn`, `leftOn`, `dogWeight`, `dateWeighed`, `dogBreed`, `dogColor`, `dogGender`, `dogAge`, `dogOrigin`,  `dateNeutered`, `behavior`, `behaviorText`, `health`, `healthText`, `dentalNotes`, `lastDentalExam`) VALUES
		( '$dogID', '$dogName', '$arrivedOn', '$leftOn', '$dogWeight', '$dateWeighed', '$dogBreed', '$dogColor', '$dogGender', '$dogAge', '$dogOrigin', '$screenType', '$screeningDate', '$dateNeutered', '$behavior', '$behaviorText', '$health', '$healthText', '$dentalNotes', '$lastDentalExam')");

		//TODO   All fields need to have a value - or set a default value in the database or record will not post
		/*$mysqli->query("INSERT INTO `ff_healthapp` ( `dogID`, `dogName`, `arrivalDate`, `arrivedOn`, `leftOn`, `dogWeight`, `dateWeighed`, `dogBreed`, `dogColor`, `dogGender`, `dogAge`, `dogOrigin`, `dateNeutered`, `kennelName`, `shotType`, `shotsCost`, `datesDue`, `kennelNotes`, `behavior`, `behaviorText`, `health`, `healthText`, `certType`, `certsDue`, `certCost`, `adoptionStatus`, `dateMeetAdopter`, `adopterName`, `dateAdopted`, `meetingNotes`, `adoptFee`, `costToScreen`, `costToNeuter`, `dentalInfo`, `dentalNotes`, `lastDentalExam`, `transferCost`, `prescribedBy`, `dosage`, `dosageInterval`, `givenBy`, `lastTimeGiven`, `totalCostDog`) VALUES
		( '$dogID', '$dogName', '$arrivalDate', '$arrivedOn', '$leftOn', '$dogWeight', '$dateWeighed', '$dogBreed', '$dogColor', '$dogGender', '$dogAge', '$dogOrigin', '$screenType', '$screeningDate', '$dateNeutered', '$kennelName', '$shotType', '$shotsCost', '$datesDue', '$kennelNotes', '$behavior', '$behaviorText', '$health', '$healthText', '$certType', '$certsDue', '$certCost', '$adoptionStatus', '$dateMeetAdopter', '$adopterName', '$dateAdopted', '$meetingNotes', '$adoptFee', '$costToScreen', '$costToNeuter', '$dentalInfo', '$dentalNotes', '$lastDentalExam', '$transferCost', '$prescribedBy', '$dosage', '$dosageInterval', '$givenBy', '$lastTimeGiven', '$totalCostDog')");
		*/
		//echo 'Success... ' . $mysqli->host_info . "\n";

		//$mysqli->close();


	}

	if(!isset($thisid)) {
	$res9 = $mysqli->query("SELECT * FROM ff_healthapp");
					if($myrow9=$res9->fetch_object()){
						do {
					//var_dump($myrow9);
					$thisid=$myrow9->id;
					$dogName=$myrow9->dogName;
					printf('<form method="post" action="%s" id="%s"><input type="hidden" name="thisid" value="%s"><input type="submit" name="getProfile" value="%s"></form>',$PHP_SELF, $thisid, $thisid, $dogName);
					include('alarm.php');
						}  while($myrow9=$res9->fetch_object());
					}

  }
					?>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
<!--<script>
tinymce.init({
selector: '.mytextarea'
});
</script>-->



</body>
</html>