<?php

if (trim($_POST["action"]) == "Upload File") { //**** User Clicked the Upload File Button

   //*********** Execute the Following Code to Upload File *************
   
   $imagename = basename($_FILES['image_file']['name']);  // grab name of file
   $result = @move_uploaded_file($_FILES['image_file']['tmp_name'], $imagename); // upload it
		   if ($result==1){
		   echo("Successfully uploaded: <b>".$imagename."</b>"); // did it work?
		   $mysqli->query("insert into imagelibrary (
		   image_file, image_title, class_id, showdate, hidedate, delrec, siteid) values
		   ('$imagename','Talis','1','','','','$siteid')");
		   } // end if
	}



if($_POST["go"]) {

$link1=$mysqli->real_escape_string($_POST["link1"]);
$link2=$mysqli->real_escape_string($_POST["link2"]);
$link3=$mysqli->real_escape_string($_POST["link3"]);
$link4=$mysqli->real_escape_string($_POST["link4"]);
$link5=$mysqli->real_escape_string($_POST["link5"]);
$link6=$mysqli->real_escape_string($_POST["link6"]);
$link7=$mysqli->real_escape_string($_POST["link7"]);
$link8=$mysqli->real_escape_string($_POST["link8"]);
$mysqli->query("update weblinks set link1='$link1', link2='$link2', link3='$link3', link4='$link4', link5='$link5', link6='$link6', link7='$link7', link8='$link8' where siteid='$siteid'");
}

if($_POST["save"]) {
$sidenav1=$mysqli->real_escape_string($_POST["sidenav1"]);
$sidenav2=$mysqli->real_escape_string($_POST["sidenav2"]);
$sidenav3=$mysqli->real_escape_string($_POST["sidenav3"]);
$sidenav4=$mysqli->real_escape_string($_POST["sidenav4"]);
$sidenav5=$mysqli->real_escape_string($_POST["sidenav5"]);
$sidenav6=$mysqli->real_escape_string($_POST["sidenav6"]);
$sidenav7=$mysqli->real_escape_string($_POST["sidenav7"]);
$sidenav8=$mysqli->real_escape_string($_POST["sidenav8"]);
$sidenav9=$mysqli->real_escape_string($_POST["sidenav9"]);
$sidenav10=$mysqli->real_escape_string($_POST["sidenav10"]);
$sidenav11=$mysqli->real_escape_string($_POST["sidenav11"]);
$sidenav12=$mysqli->real_escape_string($_POST["sidenav12"]);
$sidenav13=$mysqli->real_escape_string($_POST["sidenav13"]);
$sidenav14=$mysqli->real_escape_string($_POST["sidenav14"]);
$sidenav15=$mysqli->real_escape_string($_POST["sidenav15"]);
$mysqli->query("update catlinks set sidenav1='$sidenav1', sidenav2='$sidenav2',
sidenav3='$sidenav3', sidenav4='$sidenav4', sidenav5='$sidenav5', sidenav6='$sidenav6',
sidenav7='$sidenav7', sidenav8='$sidenav8', sidenav9='$sidenav9', sidenav10='$sidenav10',
sidenav11='$sidenav11', sidenav12='$sidenav12', sidenav13='$sidenav13', sidenav14='$sidenav14',
sidenav15='$sidenav15' where siteid='$siteid'");
}



if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if($_POST['create_category']){

// Prepare an insert statement
$sql= "INSERT INTO `categories` (`id`, `siteid`, `navid`, `catname`, `catdesc`, `cat_group`, `cat_url`, `listorder`, `delrec`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";


	if($stmt = mysqli_prepare($mysqli, $sql)){
    mysqli_stmt_bind_param($stmt, "sssssssss", $id, $siteid, $navid, $catname, $catdesc, $cat_group, $cat_url, $listorder, $delrec);

		$id=NULL;
		$siteid=$mysqli->real_escape_string($_POST['siteid']);
		$navid=$mysqli->real_escape_string($_POST['navid']);
		$catname=$mysqli->real_escape_string($_POST['catname']);
		$catdesc=$mysqli->real_escape_string($_POST['catdesc']);
		$cat_group=$mysqli->real_escape_string($_POST['cat_group']);
		$cat_url=$mysqli->real_escape_string($_POST['cat_url']);
		$listorder=$mysqli->real_escape_string($_POST['listorder']);
		$delrec='';

    mysqli_stmt_execute($stmt);

    echo "Records inserted successfully.";


	//$mysqli->query("INSERT INTO `categories` (`id`, `siteid`, `navid`, `catname`, `catdesc`, `cat_group`, `cat_url`, `listorder`, `delrec`) VALUES (NULL, '$siteid', '$navid', '$catname', '$catdesc', '$cat_group', '$cat_url', '$listorder', '');");
	} else {
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($mysqli);
	}
// Close statement
mysqli_stmt_close($stmt);

// Close connection
//mysqli_close($link);
}

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if($_POST['del_category']) {
$this_cat_id=$_POST['this_cat_id'];
$mysqli->query("update categories set delrec='on' where id='$this_cat_id'");
}


// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if($_POST['create_classified']){



$sql = "INSERT INTO `classifieds` (`siteid`, `catid`, `title`, `thislisting`, `target_url`, `target_name`, `image_name`,
`embed_code`, `memberid`, `authname`, `origdate`, `details`, `featured`, `link1`, `link2`, `link3`,
`link4`, `link5`, `link6`, `link7`, `link8`, `showdate`, `hidedate`, `contactname`, `contactnotes`,
`contactemail`, `contactphone1`, `contactphone2`, `linkto`, `delrec`)
VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";



	if($stmt = mysqli_prepare($mysqli, $sql)){
    mysqli_stmt_bind_param($stmt, "ssssssssssssssssssssssssssssss",$siteid, $catid, $title, $thislisting, $target_url,
    $target_name, $image_name, $embed_code, $memberid, $authname, $origdate, $details, $featured, $link1, $link2,
    $link3, $link4, $link5, $link6, $link7, $link8,  $showdate, $hidedate, $contactname, $contactnotes, $contactemail,
    $contactphone1, $contactphone2, $linkto, $delrec);


			//$id=NULL;
			$siteid = empty($_POST['siteid']) ? '' : $_POST['siteid'];
			$catid = empty($_POST['catid']) ? '' : $_POST['catid'];
			$title = empty($_POST['title']) ? '' : $_POST['title'];
			$thislisting = empty($_POST['thislisting']) ? '' : $_POST['thislisting'];
			$target_url = empty($_POST['target_url']) ? '' : $_POST['target_url'];
			$target_name = empty($_POST['target_name']) ? '' : $_POST['target_name'];
			$image_name = empty($_POST['image_name']) ? '' : $_POST['image_name'];
			$embed_code = empty($_POST['embed_code']) ? '' : $_POST['embed_code'];
			$memberid = empty($_POST['memberid']) ? '' : $_POST['memberid'];
			$authname = empty($_POST['authname']) ? '' : $_POST['authname'];
			$origdate = empty($_POST['origdate']) ? '' : $_POST['origdate'];
			$details = empty($_POST['details']) ? '' : $_POST['details'];
			$featured = empty($_POST['featured']) ? '' : $_POST['featured'];
			$link1 = empty($_POST['link1']) ? '' : $_POST['link1'];
			$link2 = empty($_POST['link2']) ? '' : $_POST['link2'];
			$link3 = empty($_POST['link3']) ? '' : $_POST['link3'];
			$link4 = empty($_POST['link4']) ? '' : $_POST['link4'];
			$link5 = empty($_POST['link5']) ? '' : $_POST['link5'];
			$link6 = empty($_POST['link6']) ? '' : $_POST['link6'];
			$link7 = empty($_POST['link7']) ? '' : $_POST['link7'];
			$link8 = empty($_POST['link8']) ? '' : $_POST['link8'];
			$showdate = empty($_POST['showdate']) ? '' : $_POST['showdate'];
			$hidedate = empty($_POST['hidedate']) ? '' : $_POST['hidedate'];
			$contactname = empty($_POST['contactname']) ? '' : $_POST['contactname'];
			$contactnotes = empty($_POST['contactnotes']) ? '' : $_POST['contactnotes'];
			$contactemail = empty($_POST['contactemail']) ? '' : $_POST['contactemail'];
			$contactphone1 = empty($_POST['contactphone1']) ? '' : $_POST['contactphone1'];
			$contactphone2 = empty($_POST['contactphone2']) ? '' : $_POST['contactphone2'];
			$linkto = empty($_POST['linkto']) ? '' : $_POST['linkto'];
			$delrec = empty($_POST['delrec']) ? '' : $_POST['delrec'];



    mysqli_stmt_execute($stmt);

    //echo "Records inserted successfully.";

	//var_dump($stmt);

	} else {
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($mysqli);
	}

mysqli_stmt_close($stmt);

// Close connection
//mysqli_close($link);

}
if ($_POST['del_classified']) {
$this_class_id=$_POST['this_class_id'];
$mysqli->query("update classifieds set delrec='on' where id='$this_class_id' and siteid='$siteid'");
}

/*
if($_POST['save_theme']){
$themename=$_POST['name'];
$themedesc=$_POST['themedesc'];

	if($_POST['id']){
	$themeid=$_POST['id'];
	$mysqli->query("update themes set name='$themename', themedesc='$themedesc' where id='$themeid'");
	} else {
	$mysqli->query("insert into themes (name, themedesc, siteid) values ('$themename', '$themedesc', '$siteid')");
	}

}

$themecount='1';
if($res12 = $mysqli->query("select * from themes where delrec != 'on' and siteid='$siteid' order by id limit 0,4")){
		while($myrow12=$res12->fetch_object()){
			printf("<form method=post id=%s action=%s><p><input type=hidden name=id value='%s'><p><a name='themes'>Edit Theme %s</a></p><p><input type=text name=name value='%s'><input type=text name=themedesc value='%s'><input type=submit name='save_theme' value='save theme %s'></p></form>",$myrow12->id, htmlspecialchars($PHP_SELF),  $myrow12->id, $themecount, $myrow12->name, $myrow12->themedesc, $themecount);
			$themecount++;
		}
}
while($themecount <= 4){
printf("<form method=post action=%s><p><a name='themes'>Add Theme %s</a></p><p><input type=text name=name><input type=text name=themedesc><input type=submit name='save_theme' value='save theme %s'></p></form>",htmlspecialchars($PHP_SELF), $themecount, $themecount);
$themecount++;
}







if($res3 = $mysqli->query("select * from weblinks where delrec != 'on' and siteid='$siteid'")){
	if($myrow3=$res3->fetch_object()){
	do{
	printf("<form method=post action=%s>
	<p><a name='links'>Enter Text forzzz Primary Links</a></p>
	<input type=text name=link1 value='%s'>
	<input type=text name=link2 value='%s'>
	<input type=text name=link3 value='%s'>
	<input type=text name=link4 value='%s'>
	<input type=text name=link5 value='%s'>
	<input type=text name=link6 value='%s'>
	<input type=text name=link7 value='%s'>
	<input type=text name=link8 value='%s'>
	<input type=submit name=go value='Go'>
	</form>",htmlspecialchars($PHP_SELF), $myrow3->link1, $myrow3->link2, $myrow3->link3, $myrow3->link4, $myrow3->link5, $myrow3->link6,
	$myrow3->link7, $myrow3->link8);
	}while($myrow3=$res3->fetch_object());
	} else {

?>
<form method=post action=<?php echo htmlspecialchars($PHP_SELF); ?>>
	<p><a name='links'>Enter Text for Primary Links</a></p>
	<input type=text name=link1 value='<?php echo $link1; ?>'>
	<input type=text name=link2 value='<?php echo $link2; ?>'>
	<input type=text name=link3 value='<?php echo $link3; ?>'>
	<input type=text name=link4 value='<?php echo $link4; ?>'>
	<input type=text name=link5 value='<?php echo $link5; ?>'>
	<input type=text name=link6 value='<?php echo $link6; ?>'>
	<input type=text name=link7 value='<?php echo $link7; ?>'>
	<input type=text name=link8 value='<?php echo $link8; ?>'>
	<input type=submit name=go value='Go'>
	</form>
<?php
	}
}

if($res4 = $mysqli->query("select * from catlinks where delrec != 'on' and siteid='$siteid'")){
	if($myrow4=$res4->fetch_object()){
	do{
	printf("<form method=post action='%s'><p><a name='leftside'>Left Side Menu Items</a></p>
	<p><input type='text' name=sidenav1 value='%s'></p>
	<p><input type='text' name=sidenav2 value='%s'></p>
	<p><input type='text' name=sidenav3 value='%s'></p>
	<p><input type='text' name=sidenav4 value='%s'></p>
	<p><input type='text' name=sidenav5 value='%s'></p>
	<p><input type='text' name=sidenav6 value='%s'></p>
	<p><input type='text' name=sidenav7 value='%s'></p>
	<p><input type='text' name=sidenav8 value='%s'></p>
	<p><input type='text' name=sidenav9 value='%s'></p>
	<p><input type='text' name=sidenav10 value='%s'></p>
	<p><input type='text' name=sidenav11 value='%s'></p>
	<p><input type='text' name=sidenav12 value='%s'></p>
	<p><input type='text' name=sidenav13 value='%s'></p>
	<p><input type='text' name=sidenav14 value='%s'></p>
	<p><input type='text' name=sidenav15 value='%s'></p>
	<p><input type='submit' name='save' value='save'></p>
	</form>",htmlspecialchars($PHP_SELF), $myrow4->sidenav1, $myrow4->sidenav2, $myrow4->sidenav3, $myrow4->sidenav4,
	$myrow4->sidenav5, $myrow4->sidenav6, $myrow4->sidenav7, $myrow4->sidenav8, $myrow4->sidenav9,
	$myrow4->sidenav10, $myrow4->sidenav11, $myrow4->sidenav12, $myrow4->sidenav13, $myrow4->sidenav14,
	$myrow4->sidenav15);

	} while($myrow4=$res4->fetch_object());
	} else {
	?>
	<form method=post action='<?php htmlspecialchars($PHP_SELF);?>'><p><a name='leftside'>Left Side Menu Items</a></p>
		<p><input type='text' name=sidenav1 value='<?php echo $sidenav1; ?>'></p>
		<p><input type='text' name=sidenav2 value='<?php echo $sidenav2; ?>'></p>
		<p><input type='text' name=sidenav3 value='<?php echo $sidenav3; ?>'></p>
		<p><input type='text' name=sidenav4 value='<?php echo $sidenav4; ?>'></p>
		<p><input type='text' name=sidenav5 value='<?php echo $sidenav5; ?>'></p>
		<p><input type='text' name=sidenav6 value='<?php echo $sidenav6; ?>'></p>
		<p><input type='text' name=sidenav7 value='<?php echo $sidenav7; ?>'></p>
		<p><input type='text' name=sidenav8 value='<?php echo $sidenav8; ?>'></p>
		<p><input type='text' name=sidenav9 value='<?php echo $sidenav9; ?>'></p>
		<p><input type='text' name=sidenav10 value='<?php echo $sidenav10; ?>'></p>
		<p><input type='text' name=sidenav11 value='<?php echo $sidenav11; ?>'></p>
		<p><input type='text' name=sidenav12 value='<?php echo $sidenav12; ?>'></p>
		<p><input type='text' name=sidenav13 value='<?php echo $sidenav13; ?>'></p>
		<p><input type='text' name=sidenav14 value='<?php echo $sidenav14; ?>'></p>
		<p><input type='text' name=sidenav15 value='<?php echo $sidenav15; ?>'></p>
		<p><input type='submit' name='save' value='save'></p>
	</form>
	<?php
	}
	
}*/
?>