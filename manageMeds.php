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
	//background-color:#dfece7;
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
.row {
 	height:3em;
 }

.table {
	padding:5em;
	border:3px solid #333;

}
select {
	font-family: Montserrat, sans-serif;
	width:auto;
	text-align:right;
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




?>

<!--  MANAGE MEDS manageMeds.php SHOULD ONLY HAVE AVAILABLE THE OPTION TO CHANGE DOSAGE, INTERVAL, INSTRUCTIONS, WITH MEALS -
ALARM IS ON ALARM MANAGEMENT AND MEDICATION AND PRESCRIBED BY RECORDS ARE MANAGED IN DATABASE TABLES)
MAKE DROP DOWN LIST OF MEDICATION WHICH IS ASSIGNED AND LOCKED TO THE PRESCRIBED BY INFORMATION AND CLICK FOR
CONTACT INFO FROM THAT AREA TO DROP A DIV.    ALSO MAKE THIS VIEW A LIST LAYOUT BECAUSE THERE WILL BE MANY
MEDICATIONS PER DOG.   HAVE EACH RECORD ON THE LIST BE A UNIQUE FORM SO FIELDS CAN BE UPDATED QUICKLY. FROM
THE LIST VIEW-->

<div class="container">
	<form method="post" action="<?php echo htmlspecialchars($PHP_SELF); ?>"  >


<div class="table">
		<div class="row"><!-- find out how this works in real life, should prescription date be updated> should there be an id#?-->
		<div class="col">Prescription Date:</div>
		<div class="col"><input type="date" name="prescriptionDate" ></div>
	</div>
</div>
	<div class="table">
		<div class="row">
			<div class="col">Medication<br/><a href="#">Add Medication</a></div><div class="col"><select name="medicationID"><option selected>Xanax</option></select></div>
</div></div>
<!-- Just show health provider read info from database here, since it can't be changed here. show next to the medication name - it actually should be an inner join on two tables1!!
<div class="table"><div class="row">
			<div class="col">Prescribed by<br/><a href="#">Add Provider</a></div><div class="col"><select name="prescribedBy"><option selected>Dr. Doolittle</option></select></div>
		</div>

</div>
<div class="table">

	<div class="row">
	<div class="col">Course Completed/Stop Alarm</div><!-- just make below a toggle function and update accordingly
	<div class="col">Yes</div><div class="col"><input type="radio" name="completed"></div>
	<div class="col">No</div><div class="col"><input type="radio" name="completed"></div>
	</div>
	</div><div class="table">

		<?php
				$res22=$mysqli->query("select * from ff_prescriptions where dogID='$dogID'");
				if($row22=$res22->fetch_object()){
					$lastTimeGiven=$row22->lastTimeGiven;
				}



				printf("<div class='row'><div class='col-6'>Adjust the Last Time or Enter First Time Given</div>
				<div class='col'><input type='date' name='lastTime' value='%s' /></div></div>", $time);


		?>
</div>-->


<div class="table">
<div class="row">
	<div class="col">Refillable:</div><!-- find out how this works in real life, should prescription date be updated> should there be a new id#?-->
	<div class="col"><input type="radio" name="refillable"></div><div class="col">No</div>
	<div class="col"><input type="radio" name="refillable"></div><div class="col">Yes</div>
	</div>


</div>
<div class="table">
<div class="row">
   <div class="col">Dosage:</div>
   <div style="text-align:left;" class="col"><input style="width:4em;text-align:left;" type="number" name="dosage"></div>
   </div><div class="row">
    <div class="col">UOM:</div>
    <div class="col">
    <select class="form-control" name="measurement">

    <!-- are these accurate measurements in real world -->
<option>milliliter(s) (ml)</option>
<option>tbsp(s)</option>
<option>fl ounce(s) = 30 ml</option>
<option>1/2 cup = 4 fl oz = 125 ml</option>
<option>cup(s) = 8 fl oz = 250 ml</option>
<option>pint(s) = 16 fl oz = 500 ml</option>
<option>quart(s)</option>
<option>liter(s)</option>
<option>gallon(s)</option></select></div>
</div></div>
<div class="table">
<div class="row">
	<div class="col">To Be Given:</div>
	<div class="col"><input type="radio" name="intervalPer" value="1"></div><div class="col">Once Daily</div>
	<div class="col"><input type="radio" name="intervalPer" value="2"></div><div class="col">Twice Daily</div>
	<!--<div class="col"><input type="radio" name="intervalPer" value="3"></div><div class="col">Per Schedule</div>-->

	<!-- are we making a schedule?  what's a real world scenario-->

</div>
</div>
<div class="table">
<div class="row">
	<div class="col">With Meals</div>
	<div class="col"><input type="radio" name="withMeals">No	</div>

	<div class="col"><input type="radio" name="withMeals">Yes	</div>

</div>
</div>
<div class="table">
			<div class="row">
			<div class="col">Special Instructions: </div>
			<div class="col left"><textarea class="myTxtarea" name="specInstructs">Before Bedtime after meal</textarea></div>




	</div>
	</div>
	<div class="table">

	<div class="row">
			<div style="padding-top:12px;" class="col-md-12 center"><input style="background:#dfece7;" class="form-control" type="submit" name="submit1" value="Submit"></div>
	</div>
	</form>

</div>
<?php

} else {


?>


<!--This app will maintain an accurate and timely status on the health and
well-being of the kennel population, provide a medical alert for each dog as necessary, and
track associated costs per dog for financial planning purposes. It will allow authorized
personnel to get an immediate, up-to-date status on the welfare of an individual dog or that
of the entire kennel population.</p>-->


	<div class="container">

		<?php
			$res = $mysqli->query("select * from ff_healthapp order by id");

				if($myrow=$res->fetch_object()){


				echo '<p class="lead">Prescription Management</p>';
					do {
				$thisid=$myrow->id;
				$newName=$myrow->dogName;
				?>
							<form method="post" action="<?php htmlspecialchars($PHP_SELF); ?>" id="<?php echo $thisid; ?>">
							<div class="col md-6 center"><p class="para">

			<input type="hidden" name="newID" value="<?php echo $thisid; ?>">
			<input type="hidden" name="newName" value="<?php echo $newName; ?>">

			<input type="submit" name="getPatientInfo" id="getPatientInfo" value="<?php echo $newName; ?>" />
			</form>



	<?php

						} while($myrow=$res->fetch_object());

		}
}
?>
</body>
</html>