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
<!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
<!--<script>
tinymce.init({
selector: '.mytextarea'
});
</script>-->

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
<?php
include('healthNav.php');
?>

<!--This app will maintain an accurate and timely status on the health and
well-being of the kennel population, provide a medical alert for each dog as necessary, and
track associated costs per dog for financial planning purposes. It will allow authorized
personnel to get an immediate, up-to-date status on the welfare of an individual dog or that
of the entire kennel population.</p>-->



<?php
include('ff_connect.php');

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

		include('dogProfile.php');
		//include('illness.php');
		include('medical.php');
		include('behavior.php');
		//include('dental.php');
		include('adoption.php');
		//include('costs.php');

		?>



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


</body>
</html>