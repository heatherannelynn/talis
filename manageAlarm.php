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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
tinymce.init({
selector: '.mytextarea'
});
</script>
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
    width:100%;
    text-align:right;
}

table {
	width:100%;
	margin:auto;
	justify-content:center;
}

.fieldDepth {
	font-family: Montserrat, sans-serif;
	width:100%;
	height:100%;
	padding-bottom:3px;
	padding-top:2px;
	padding-left:3px;
	margin:auto;
	text-align:right;
	font-size:1.1em;
	font-weight:500;
	background:#dfece7;
	//border: 1px dashed red;
}
</style>

</head>

<body>
<?php
include('healthNav.php');
include('ff_connect.php');
$time=date("H:i:s");

	date_default_timezone_set('UTC');
	$time = date("D m/d  H:i");
	$newTime=strtotime($time);



if($_POST['getPatientInfo']) {
//TODO   FIX THIS  ------------------------------------------------------------->>>>>>>>>>>>>>>>>>>>>>>>>>


/*-------------------------------

						foreach ($obj as $property => $value)


*/



			$res24=$mysqli->query("select * from ff_healthapp where id='1'");
			if($row24=$res24->fetch_object()){
				$dogName=$row24->dogName;
//TODO     NOT GRABBING THE ID CORRECTLY -------------------------------------------------->>>>>>>>>>>>>>



			echo "<div class='container center'>Showing Information for ".$dogName."</div>";
			/*  Query your database on dogID, alarm last time given,  prescription, admin, contacts, medications
				Medications table need to have last time given colum
				Contacts should have Health Care Info / Prescribed By / Refills, Date of Prescription
				Administrators who dispense medicine should be selectable and jump to add Admin.
			*/
			}


		$res22=$mysqli->query("select * from ff_prescriptions where dogID='$dogID'");
		if($row22=$res22->fetch_object()){
			$lastTimeGiven=$row22->lastTimeGiven;
		}

			echo "<div id='patientInfo' class='container'>
			Last Time Given ".$time."<br/><p>TODO This is going to be hidden unless the user says reset time clock</p>";
			printf("<section><form method='post' action='%s' id='lastTime'><h3><small>Adjust the Last Time<br/>or Enter First Time Given</small></h3><input type='hidden' name='ltgID' value='%s' /><input type='date' name='lastTime' value='%s' /><input type='submit' name='saveLTG' value='save' /></form></section>", htmlspecialchars($PHP_SELF),$dogID, $time);
			$prescribedBy='Dr. Doolittle';
			$medicationId='Xanax';

?>





	<div class="table">
		<div class="row">
	<div class="col-3 para">Medication<!--<br/>	<a href="#">Add Medication</a>--></div>
	<?php echo $medicationID="Xanax"; ?>
	<div class="col-3">
	<input type="hidden" name="medicationID" value="<?php echo $medicationID; ?>">
	<!--<select style="padding:2px;" name="medicationId"><option selected><?php echo $medicationId; ?></option></select>-->

	</div>
<div class="col-2 para">Prescribed by:</div><div class="col-2 para">	<!--<a href="#">Add Provider</a></div><div class="col-3">-->
	<!--
	<select style="padding:2px;" name="prescribedBy"><option selected><?php echo $prescribedBy; ?></option></select>
	-->
	<?php $prescribedBy="Dr. Doolittle"; ?>
	<input type="hidden" name="prescribedBy" value="<?php echo $prescribedBy; ?>"><?php echo $prescribedBy; ?>
	</div>
	</div>

		<div class="row">
		<div class="col-3">Prescription Date:</div><?php $prescriptionDate="March 8, 2019"; ?>
		<div class="col-3"><input type="hidden" size="14" name="prescriptionDate"><?php echo $prescriptionDate; ?></div>

	<div class="col-3">Refillable:</div><div class="col-2">Yes<input type="hidden" name="refillable" value="<?php echo $refillable; ?>">

	<!--  keep for add medYes<input type="radio" name="refillable">No<input type="radio" name="refillable"> --></div>
	</div>



</div>
<div class="table center">
<div class="row">
	<?php $dosage="8"; ?>
   <div style="text-align:right;width:100%;" class="col-2"><label for="dosage">Dosage:</label></div>
   <div class="col-1"><input type="hidden" name="dosage"  value="<?php echo $dosage; ?>"><?php echo $dosage; ?></div>
    <div class="col-1"><label style="text-align:left;width:100%;" for="measurement">UOM:</div>
    <div style="text-align:left;width:100%;" class="col-2">
    <!-- TODO keep for add medication form
    <select class="fieldDepth form-control" name="measurement">
<option>milliliter(s) (ml)</option>
<option>tbsp(s)</option>
<option>fl ounce(s) = 30 ml</option>
<option>1/2 cup = 4 fl oz = 125 ml</option>
<option>cup(s) = 8 fl oz = 250 ml</option>
<option>pint(s) = 16 fl oz = 500 ml</option>
<option>quart(s)</option>
<option>liter(s)</option>
<option>gallon(s)</option></select>-->
<?php $measurement="fl. oz"; ?>
<input type="hidden" name="measurement" value="<?php echo $measurement; ?>"><?php echo $measurement; ?>
</div>
	<div style="width:100%;text-align:right;" class="col-2">To Be Given:</div><div>
	<?php $intervalPer="Once Daily"; ?>
<input type="hidden" name="intervalPer" value="<?php echo $intervalPer; ?>"><?php echo $intervalPer; ?>
	<!--
	Once Daily<input type="radio" name="intervalPer" value="1"><br/>
	Twice Daily<input type="radio" name="intervalPer" value="2"><br/>Per Schedule<input type="radio" name="intervalPer" value="3">


	</div>
	<div style="width:100%;text-align:right;" class="col-2">With Meals</div><div>
	<input type="hidden" name="withMeals" value="<?php echo $withMeals; ?>"><?php echo $withMeals; ?>

	<!--Yes<input type="radio" name="withMeals"><br/>No<input type="radio" name="withMeals">--></div>
	</div>
		<!--<div class="row">
	<div class="col para">Date Given Last</div><div class="col"><input class="form-control" type="date" name="lastTimeGiven" value="<?php echo $lastTimeGiven ?>">

		<p class="para">Given By Whom:<input class="form-control" type="text" name="givenBy" value="<?php echo $givenBy ?>"></div>



	<p class="para">Medication:<input class="lead form-control" type="text" name="medication" value="<?php echo $prescribedBy; ?>"></p>
	<p class="para">Prescribed by:<input class="lead form-control" type="text" name="prescribedBy" value="<?php echo $prescribedBy; ?>"></p>
	<p class="para">Dosage:<input class="form-control" type="text" name="dosage" value="<?php echo $dosage; ?>"></p>
	<p class="para">Time Interval<input class="form-control" type="text" name="dosageInterval" value="<?php echo $dosageInterval; ?>"></p>
	<p class="para">Date Given Last<input class="form-control" type="date" name="lastTimeGiven" value="<?php echo $lastTimeGiven ?>"></p>
	<p class="para">Given By Whom:<input class="form-control" type="text" name="givenBy" value="<?php echo $givenBy ?>"></p>
			</div></div>-->

			<div class="row">
			<div class="col">Special Instructions: <!--<textarea class="myTxtarea" name="specInstructs"></textarea>--><font color=red>Before Bedtime after meal</font></div>




	</div>
	<div class="row">
	<div class="col" style="width:100%;text-align:center;"><input type="submit" style="width:100%;text-align:center;" value="Stop Medication Alarm/Course Completed" class="fieldDepth"><br/><br/></div><!--
	<div class="col-md-2">Yes</div><div class='col-md-2'><input type="radio" name="completed"></div><div class='col-md-2'>No</div><div class='col-md-2'><input type="radio" name="completed"></div>-->
	</div>

	</form>

</div>
<?php
}   else {



?>


<!--This app will maintain an accurate and timely status on the health and
well-being of the kennel population, provide a medical alert for each dog as necessary, and
track associated costs per dog for financial planning purposes. It will allow authorized
personnel to get an immediate, up-to-date status on the welfare of an individual dog or that
of the entire kennel population.</p>-->


	<div class="container">
	<form method="post" action="<?php htmlspecialchars($PHP_SELF); ?>" name="addMedForm" >

	<!--Select dog from Dogs where ID=Id-->



			<!--<option value="1">Fido</option>-->
			<?php
			$res = $mysqli->query("select * from ff_healthapp order by id");

				if($myrow=$res->fetch_object()){


				echo '<p class="lead">Alarm Management</p>';
					do {
				$thisid=$myrow->id;
				$newName=$myrow->dogName;
				?>
							<form method="post" action="<?php htmlspecialchars($PHP_SELF); ?>" id="<?php echo $thisid; ?>">
							<div class="col md-6 center"><p class="para">

			<input type="hidden" name="newID" value="<?php echo $thisid; ?>">
			<input type="hidden" name="newName" value="<?php echo $newName; ?>">

			<input type="submit" name="getPatientInfo" id="getPatientInfo" value="<?php echo $newName; ?>" />
			</form></div>
	<!--  Put this in hidden div make display only if Reset Clock -->



	<?php

						} while($myrow=$res->fetch_object());

}
}
?>
</body>
</html>