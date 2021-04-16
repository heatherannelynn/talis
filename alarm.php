<html style="scroll-behavior:smooth !important" lang="en">

  <head>
<title>Fast Friends Medication Alarm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta property="og:image" content="https://sitesappsimages.com/assets/images/thumb.png" />
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

.centered {
  position: fixed; /* or absolute */
  top: 13%;
  width:100%;
  text-align:center;
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
</style>

</head>
<body>

<!--<div class="container-fluid centered" >
<p class="lead">Fast Friends Medication Alarm</p>
<p>Function:
1.  Last Time Given  + Interval = Next Time<br/>
2.  Alarm Set for :  Right Now  UNTIL Next Time<br/>
<span style="text-decoration:indent"><font color="green">Green</font> = Not Late<br/>
<font color="red">Red</font> = Late
</p>



Assume we are at the first dose on the schedule for Fido, <br/>
Med:  Gummy Vitamins<br/>
Dosage:  2 Vitamins<br/>
Interval:  24 hours<br/>


</div>-->
<?php

if(isset($_POST['refresh'])) {
    header("location:alarm.php"); // your current page
}


//if($_POST['submit']){
	if($_POST['lastTimeGiven']!='') {
	$time = $_POST['lastTimeGiven'];
	printf("<form method='post' action='%s' id='lastTime'><input type='text' name='ltgID' value='%s' /><input type='date' name='lastTime' value='%s' /><input type='submit' name='updateLTG' value='update last time given' /></form>",$PHP_SELF,$dogID, $time);
	//  TODO ->  MOVE THIS TO MANAGEMEDS
	} else {


	echo "<div class='container'>";
	date_default_timezone_set('UTC');
	$time = date("D m/d  H:i");
	$newTime=strtotime($time);

	//  TODO ->  MOVE THIS TO MANAGEMEDS
	/*
	printf("<section><form method='post' action='%s' id='lastTime'><h3><small>Adjust the last Time<br/>or Enter First Time Given</small></h3><input type='hidden' name='ltgID' value='%s' /><input type='text' name='lastTime' value='%s' /><input type='date' name='updateLTG' value='%s' /><input type='submit' name='saveLTG' value='save' /></form></section>", $PHP_SELF,$dogID, $time , $newTime);
	echo "</div>";
	*/
	// MOVED THIS NEXT LINE INTO DO WHILE TO MANAGEMEDS

	//echo "<h4><a href='manageMeds.php'>Manage Medication Schedule for ".$dogName."</a></h4><br/>";
	}
		//var_dump($_POST);

echo "Last Time Given ".$time;
$time2 = "24:00:00";

//echo "<br/>Interval  ".$time2;



$secs = strtotime($time2)-strtotime("00:00:00");

//echo "<br/>secs ??:  ".$secs;

$nextTime = date("y-m-d  H:i",strtotime($time)+$secs);

//echo "<br/>Next Time:  ".$nextTime;
$today = date("Y-m-d H:i");
		if(strtotime($nextTime)<= $today) { echo "<br/>Alarm is on";
		} else {echo "<br/>Alarm is set for ".$nextTime; }


//EVERYTHING GOOD UP TO HERE.. CHECK BELOW

$today = date("Y-m-d H:i");
$first_date = new DateTime($today);
$second_date = new DateTime("2020-11-22 12:06");

$difference = $first_date->diff($second_date);


//  TODO  - if  right now is greater than nextTime - > $alarmOn = 1;

$today = date("Y-m-d H:i");
$rightNow=strtotime($today);

//echo "<br/>NextTime".$nextTime;

echo "<br/>Last Refresh:  ";
//printf("<br/><form method=post action='%s'><input type=submit name='refresh' value='Refresh'/></form><br/>",$PHP_SELF);
echo date("Y-m-d H:i",$rightNow);
if(strtotime($nextTime) > $rightNow) { echo "<br/><font color='green'>Not Late</font>"; } else { echo "<br/><font color='red'>Alarm ON!!!!</font>"; }

//} else {
?>


<?php

include('ff_connect.php');
include('test.php');
//}
/*
$today = date("Y-m-d H:i:s");
$first_date = new DateTime($today);
$second_date = new DateTime("2020-11-20 12:06:00");

$difference = $first_date->diff($second_date);

var_dump(get_object_vars($difference));
echo $difference->d." Days<br/>";
echo $difference->h." Hours<br/>";
echo $difference->i." Minutes";
*/
//echo ['days'];
?>
</div>
<!--<br/><br/>

<form method="post" action="<?php echo $PHP_SELF; ?>">
<b>Adjust the time clock</b><br/>
Enter Last Time Given : (format like this for now: 2020-11-20 12:06)<br/>
<input type="text" name="lastTimeGiven" value="<?php echo $time; ?>">
<input type="submit" name="submit">
</form>-->

</body>
</html>