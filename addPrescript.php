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

.fieldDepth, select {
	font-family: Montserrat, sans-serif;
	min-width:14em;
	max-width:14em;
	height:auto%;
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
//select from healthapp dog id

//presecriptions are specific to dogs and need to be added, updated, (course stopped or delrec=true, would be updated from manageMeds.php in MPA), not here.  here is only add/update. )
//add medication and add provider are the only -  present divs in a way that eliminates redundancy - update prescription dosage/
?>

	<div class="table">
	<div class="row">
	<div class="col">For:</div><div class="col">
	<select name="thisDogID" ><option>Ernie</option><option>Bert</option></select>

	</div>
	</div></div>
	<div class="table">
			<div class="row">
		<div class="col">Medication<a href="#">Add Medication</a></div>
		<div class="col">
		<select name="medicationID"><option>Xanax</option></select>
	</div></div>
	<div class="row">
		<div class="col">Prescribed By:</div><div class="col">
		<select name="thisDogID" ><option>Dr. Doolittle</option></select>

		</div>
	</div>


	</div>

	<div class="table">

		<div class="row">
		<div class="col-3">Prescription Date:</div>
		<div class="col-3"><input type="date" size="14" name="prescriptionDate"><?php echo $prescriptionDate; ?></div>

	<div class="col-3">Refillable:</div><div class="col-2">Yes<input type="hidden" name="refillable" value="<?php echo $refillable; ?>">

	<input type="radio" name="refillable">No<input type="radio" name="refillable"></div>
	</div>



</div>
<div class="table">
<div class="row">
	<div class="col-1">To Be Taken</div>
<div class="col">
	<input type="radio" name="intervalPer" value="1">Once Daily</div>
<div class="col">
	<input type="radio" name="intervalPer" value="2">Twice Daily</div>
<div class="col">
	<input type="radio" name="intervalPer" value="3">Per Schedule</div>

	</div>
	<div class="row">
	<div class="col-5">Side Effects</div>

	<div class="col-5 left"><textarea class="myTxtarea" name="specInstructs"></textarea><!--Before Bedtime after meal--></div>
	</div>
</div>
<div class="table">


	<div class="row">
			<div style="padding-top:12px;" class="col-12 center"><input style="background:#dfece7;" class="form-control" type="submit" name="submit1" value="Submit"></div>
	</div>
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


				echo '<p class="lead">Medication Management</p>';
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
</body>
</html>