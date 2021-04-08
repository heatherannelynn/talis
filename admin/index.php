<! DOCTYPE>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
require ('../comm_connect.php');
require ('../siteid.php');
require ('functions.php');
?>
</head>
<body style="background-color:#fff;font-family:Raleway, sans-serif;font-size:14pt;">
<div class="container">
<!--
<link rel="stylesheet" href="css/commulist.css" type="text/css" media="screen" />

TO TREAT THE CSS AS A PHP FILE AT THIS .htaccess FILE TO THE CSS DIRECTORY

AddHandler application/x-httpd-php .css
php_value default_mimetype "text/css"

-->

<!-- UPLOAD FILES -->
<!-- TODO - ADD SHOWDATE HIDE DATE, TITLE, CLASS ID - NEEDS MORE DEFINITION... -->
<div class="container">
<nav class="navbar sticky navbar-expand-lg navbar-collapse" data-target="mainNav" >
<div id="mainNav" data-toggle="collapse"><li><a id="l1" onclick="jumpTo('l1'); return('true');" href='#link1'>Site Themes</a><li>
<li><a id="l2" onclick="jumpTo('l2'); return('true');" href='#link2'>Primary Links</a></li>
<li><a id="l3" onclick="jumpTo('l3'); return('true');" href='#link3'>Left Side</a></li>
<li><a id="l4" onclick="jumpTo('l4'); return('true');" href='#link4'>Menu</a></li>
<li><a id="l5" onclick="jumpTo('l5'); return('true');" href='#link5'>Categories</a></li>
<li><a id="l6" onclick="jumpTo('l6'); return('true');" href='#link6'>Images/Videos</a></li>
<li><a id="l7" onclick="jumpTo('l7'); return('true');" href='#link7'>Add Content</a></li>
<li><a id="l8" onclick="jumpTo('l8'); return('true');" href='#link8'>Set Permissionst</a></li>
</div>
</nav></div>
<!-- END DELETE CONTENT FOR PRIMARY AND SIDE MENU CATEGORIES -->

<!--  TODO  Make this a BOOTSTRAP NAV -->
<?php
//include('/../../nav.php');
?>



<!-- END SELECT/MANAGE - EDIT THEMES -->



<!-- ENTER HEADINGS FOR PRIMARY LINKS -->
<?php

if($res3 = $mysqli->query("select * from weblinks where delrec != 'on' and siteid='$siteid'")){
	if($myrow3=$res3->fetch_object()){
	do{
	printf("<form method=post action=%s>
	<p><a name='links'>Enterdssss Text for Primary Links</a></p>
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
?>
<!-- END ENTER HEADINGS FOR PRIMARY LINKS -->
</td></table>
<table><td>

<!-- ENTER TITLES FOR SIDE MENU LINKS -->
<?php
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

}
?>
<!-- END ENTER TITLES FOR SIDE MENU LINKS -->
</td></table>

<table><td>

<!-- CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
<?php
if($res14 = $mysqli->query("select * from catlinks where delrec != 'on' and siteid='$siteid'")):
	while($myrow14=$res14->fetch_object()):
$sidenav1=$myrow14->sidenav1;
$sidenav2=$myrow14->sidenav2;
$sidenav3=$myrow14->sidenav3;
$sidenav4=$myrow14->sidenav4;
$sidenav5=$myrow14->sidenav5;
$sidenav6=$myrow14->sidenav6;
$sidenav7=$myrow14->sidenav7;
$sidenav8=$myrow14->sidenav8;
$sidenav9=$myrow14->sidenav9;
$sidenav10=$myrow14->sidenav10;
$sidenav11=$myrow14->sidenav11;
$sidenav12=$myrow14->sidenav12;
$sidenav13=$myrow14->sidenav13;
$sidenav14=$myrow14->sidenav14;
$sidenav15=$myrow14->sidenav15;

endwhile;
?>
<form method="post" action="<?php echo htmlspecialchars($PHP_SELF);  ?>">
<p><a name='categories'>Create Categories</a></p>
<input type="hidden" name="siteid" value="<?php echo $siteid;?>">
<p>Navigation ID
<select name="navid">
<option value="sidenav1"><?php echo $sidenav1;?></option>
<option value="sidenav2"><?php echo $sidenav2;?></option>
<option value="sidenav3"><?php echo $sidenav3;?></option>
<option value="sidenav4"><?php echo $sidenav4;?></option>
<option value="sidenav5"><?php echo $sidenav5;?></option>
<option value="sidenav6"><?php echo $sidenav6;?></option>
<option value="sidenav7"><?php echo $sidenav7;?></option>
<option value="sidenav8"><?php echo $sidenav8;?></option>
<option value="sidenav9"><?php echo $sidenav9;?></option>
<option value="sidenav10"><?php echo $sidenav10;?></option>
<option value="sidenav11"><?php echo $sidenav11;?></option>
<option value="sidenav12"><?php echo $sidenav12;?></option>
<option value="sidenav13"><?php echo $sidenav13;?></option>
<option value="sidenav14"><?php echo $sidenav14;?></option>
<option value="sidenav15"><?php echo $sidenav15;?></option>
</select></p>
<p>Category Name<input type="text" name="catname" value="<?php echo $catname;?>"></p>
<p><textarea name="catdesc" rows=5 cols=15></textarea></p>
<p>Group<input type="text" name="cat_group" value="<?php echo $cat_group;?>"></p>
<p>Category URL<input type="text" name="cat_url" value="<?php echo $cat_url;?>"></p>
<p>List Order<input type="text" name="listorder" value="<?php echo $cat_group;?>"></p>
<p><input style='font-family:verdana,sans-serif;font-size:7.5pt' type="submit" name="create_category" value="Enter"></p>

</form>
<?php
endif;
?>

<!-- END CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
</td></table>


<table><td>


<!-- LIST CATEGORIES - DELETE CATEGORIES -->
<hr>
<?php

if($result = $mysqli->query("select * from categories where siteid='$siteid' and delrec != 'on'")){

echo "<p>Categories</p>";
	if($myrow=$result->fetch_object()){
	do{
    printf("<form method=post action='%s'>
    <input type=submit name='del_category' value='X'>
    <input type=text name='siteid' value='%s'>
    <input type=text name='this_cat_id' value='%s'>%s</form>", htmlspecialchars($PHP_SELF), $myrow->siteid, $myrow->id, $myrow->catname);
    }while($myrow=$result->fetch_object());
    } else {
    echo "No categories found";
    }
}
?>
<!-- END LIST CATEGORIES - DELETE CATEGORIES -->


</td></table>
<table><td>

<!-- UPLOAD FILE TYPES .gif, .jpeg, and .png -->

<p><a name='images'>Upload file script</a></p>

<form method='POST' enctype='multipart/form-data' name='frmmain' action='<?php htmlspecialchars($PHP_SELF); ?>'>
Browse for Image (jpg): <input type="file" name="image_file" size="35">
<br>
<input type="submit" value="  Upload File  " name="action">
</form>
<!-- END UPLOAD FILE TYPES .gif, .jpeg, and .png -->
</td></table>
<table><td>

<!-- CREATE CONTENT -->
<hr>
<form method="post" action="<?php echo htmlspecialchars($PHP_SELF);  ?>">
<p><a name='content'>Create Content</a></p>
<?php
if($res5=$mysqli->query("select * from categories where siteid='$siteid' and delrec!='on'")){
echo "<p>Category<select name='catid'>";
	while($myrow5=$res5->fetch_object()){
	$catname=$myrow5->catname;
	$catid=$myrow5->id;
	printf("<option value='%s'>%s</option>",$catid, $catname);
	}
echo "</select></p>";
} else {
echo "<p>No categories found.  Add some.</p>";
}

if($res15=$mysqli->query("select * from weblinks where siteid='$siteid' and delrec!='on'")){
	while($myrow15=$res15->fetch_object()){
	$link1=$myrow15->link1;
	$link2=$myrow15->link2;
	$link3=$myrow15->link3;
	$link4=$myrow15->link4;
	$link5=$myrow15->link5;
	$link6=$myrow15->link6;
	$link7=$myrow15->link7;
	$link8=$myrow15->link8;
	}
}
?>

<input type="hidden" name="siteid" value="<?php echo $siteid; ?>">
<p>Featured: <input name="featured" type="checkbox" <?php if ($featured == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link1;?>: <input name="link1" type="checkbox" <?php if ($link1 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link2;?>: <input name="link2" type="checkbox" <?php if ($link2 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link3;?>: <input name="link3" type="checkbox" <?php if ($link3 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link4;?>: <input name="link4" type="checkbox" <?php if ($link4 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link5;?>: <input name="link5" type="checkbox" <?php if ($link5 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link6;?>: <input name="link6" type="checkbox" <?php if ($link6 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link7;?>: <input name="link7" type="checkbox" <?php if ($link7 == 1){?> checked="checked" <?php } ?>/></p>
<p><?php echo $link8;?>: <input name="link8" type="checkbox" <?php if ($link8 == 1){?> checked="checked" <?php } ?>/></p>
<p>Title<input type="text" name="title" value="<?php echo $title;?>"></p>
<p>Embed Code<input type="text" name="embed_code" value="<?php echo $embed_code;?>"></p>
<?php
if($res9=$mysqli->query("select * from imagelibrary where siteid='$siteid' and delrec!='on'")){
echo "<p>Image : <select name='image_name'>";
	while($myrow9=$res9->fetch_object()){
	$image_file=$myrow9->image_file;
	$image_id=$myrow9->id;
	printf("<option value='%s'>%s</option>",$image_id, $image_file);
	}
echo "</select></p>";
} else {
echo "<p>No Images found.  Add some.</p>";
}
?>
<p>Content<textarea rows=10 cols=20 name="thislisting"><?php echo $thislisting;?></textarea></p>
<p>Details<textarea rows=10 cols=20 name="details"><?php echo $details;?></textarea></p>
<p>Member ID<input type="text" name="memberid" value="<?php echo $memberid;?>"></p>
<p>Target Name<input type="text" name="target_name" value="<?php echo $target_name;?>"></p>
<p>Target URL<input type="text" name="target_url" value="<?php echo $target_url;?>"></p>
<p>Author Name<input type="text" name="authname" value="<?php echo $authname;?>"></p>
<p>Date Created<input type="date" name="origdate" value="<?php echo $origdate;?>"></p>
<p>Showdate<input type="date" name="showdate" value="<?php echo $showdate;?>"></p>
<p>Hidedate<input type="date" name="hidedate" value="<?php echo $hidedate;?>"></p>
<p>Contact Name<input type="text" name="contactname" value="<?php echo $contactname;?>"></p>
<p>Contact Notes<input type="text" name="contactnotes" value="<?php echo $contactnotes;?>"></p>
<p>Contact Email<input type="text" name="contactemail" value="<?php echo $contactemail;?>"></p>
<p>Contact Phone1<input type="text" name="contactphone1" value="<?php echo $contactphone1;?>"></p>
<p>Contact Phone2<input type="text" name="contactphone2" value="<?php echo $contactphone2;?>"></p>
<p>Link to URL<input type="text" name="linkto" value="<?php echo $linkto;?>"></p>
<p><input style='font-family:verdana,sans-serif;font-size:7.5pt' type="submit" name="create_classified" value="Enter"></p>
</form>
<!-- END CREATE CONTENT -->

</td></table>
<table><td>

<!-- LIST - DELETE CONTENT-->
<?php
if($res7=$mysqli->query("SELECT * FROM `classifieds` WHERE siteid='$siteid' and delrec != 'on' ")):

echo "<p>Content</p>";
	while($myrow7=$res7->fetch_object()):
    if($myrow7->featured != '') { $feat = "Featured"; }
    if($myrow7->link1 != '') { $l1=$link1;}
    if($myrow7->link2 != '') { $l2=$link2;}
    if($myrow7->link3 != '') { $l3=$link3;}
    if($myrow7->link4 != '') { $l4=$link4;}
    if($myrow7->link5 != '') { $l5=$link5;}
    if($myrow7->link6 != '') { $l6=$link6;}
    if($myrow7->link7 != '') { $l7=$link7;}
    if($myrow7->link8 != '') { $l8=$link8;}
    printf("<form method=post action=%s><input type=submit name='del_classified' value='X'><input type=hidden
    name=this_class_id value=%s>%s<p><font color=red>%s %s %s %s %s %s %s %s %s </font></p><p>%s</p></form>", htmlspecialchars($PHP_SELF), $myrow7->id, $myrow7->title,
    $feat, $l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $myrow7->thislisting);
	endwhile;
endif;

?>
<!-- END LIST - DELETE CONTENT-->
</td></table></div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
