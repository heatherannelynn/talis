<!DOCTYPE html>
   

<html style="scroll-behavior:smooth !important" lang="en">
<head>
    <title>Talis.tv</title>
  
<meta property="og:image" content="https://sitesappsimages.com/assets/images/thumb.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link rel="icon" type="image/png" href="assets/icons/logo_icon.png">

 <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity=
"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous" /><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <?php
require ('../comm_connect.php');
require ('../siteid.php');
require ('functions.php');
require ('../css/talis.css');
?>
<style>
.aButton {
	background-color:transparent;
	text-color:#333;
}
</style>

</head>
<body style="padding-top:110px;">
<div class="container-fluid h-100">
    
               <nav class="header sticky navbar navbar-expand-lg 
                                navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.php"><img src="../assets/images/logo_white.png" width="40" /></a>
                    <!-- Hamburger button that toggles the navbar-->
                   <div style="padding:0;padding-right:28px;"> <button  class="navbar-toggler" 
                        type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" 
                        aria-controls="navbarNavAltMarkup" 
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button></div>
                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse.show" 
                        id="navbarNavAltMarkup">
                       <div class="navbar-nav">
                           		    <li class="nav-item"><a id="link1" class="nav-link" href="#l1"><div class="aButton" ><span style="color:#fff;">Menu</span></div></a></li>
                          		    <li class="nav-item"><a id="link2" class="nav-link" href="#l2"><div class="aButton" ><span style="color:#fff;">Links</span></div></a></li>
                          		    <li class="nav-item"><a id="link3" class="nav-link" href="#l3"><div class="aButton" ><span style="color:#fff;">Categories</span></div></a></li>
                          		    <li class="nav-item"><a id="link4" class="nav-link" href="#l4"><div class="aButton" ><span style="color:#fff;">Content</span></div></a></li>
                          		    <li class="nav-item"><a id="link5" class="nav-link" href="#l5"><div class="aButton" ><span style="color:#fff;">Images</span></div></a></li>
                          		    <li class="nav-item"><a id="link6" class="nav-link" target="_blank" href="campaigns/index.php"><div class="aButton" ><span style="color:#fff;">Campaigns</span></div></a></li>
                           		    <li class="nav-item disabled"><a id="link7" class="nav-link" href="#l7"><div class="aButton" ><span style="color:#fff;">Themes</span></div></a></li>
                                    <li class="nav-item disabled"><a id="link8" class="nav-link" href="#l8"><div class="aButton" ><span style="color:#fff;">Users</span></div></a></li>
                         </div>
					  </div>
                </nav>
				
 
<!--Pad Top-->
<div class="container"><div class="row">
	<div id="l4" class=" class="col-md=4"">

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


	</div>

	</div></div><div class="container"><div class="row">

	<div class="col">
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
	</div>

	<div class="col">
	<p>Content<textarea rows=10 cols=20 name="thislisting"><?php echo $thislisting;?></textarea></p>
	<p>Details<textarea rows=10 cols=20 name="details"><?php echo $details;?></textarea></p>
	</div>

	<div class="col">
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
	</div></form>
</div>
<!-- END CREATE CONTENT -->
</div></div><div class="container"><div class="row">
	<div class="col">
	<!-- LIST - DELETE CONTENT-->
	<?php
	$res7=$mysqli->query("SELECT * FROM `classifieds` WHERE siteid='$siteid' and delrec != 'on' ");
	if($myrow7=$res7->fetch_object()){
	echo "<p>Content</p>";
		do{
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
		}while($myrow7=$res7->fetch_object());
	}

	?>
	<!-- END LIST - DELETE CONTENT-->


	</div>


	</div></div><div class="container"><div class="row">
		<div id="l1"  class="col">

	<?php
	if($res3 = $mysqli->query("select * from weblinks where delrec != 'on' and siteid='$siteid'")){

		if($myrow3=$res3->fetch_object()){
		do{
		printf("<p>Weblinks/Primary Links</p><form method=post action=%s>
	
		<li><input type=text name=link1 value='%s'></li>
		<li><input type=text name=link2 value='%s'></li>
		<li><input type=text name=link3 value='%s'></li>
		<li><input type=text name=link4 value='%s'></li>
		<li><input type=text name=link5 value='%s'></li>
		<li><input type=text name=link6 value='%s'></li>
		<li><input type=text name=link7 value='%s'></li>
		<li><input type=text name=link8 value='%s'></li>
		<div class='col'><input type=submit name=go value='Go'></div>
		</form>",htmlspecialchars($PHP_SELF), $myrow3->link1, $myrow3->link2, $myrow3->link3, $myrow3->link4, $myrow3->link5, $myrow3->link6,
		$myrow3->link7, $myrow3->link8);
		}while($myrow3=$res3->fetch_object());
		} else {

	?>
	<p>Weblinks/Primary Links</p><form method=post action=<?php echo htmlspecialchars($PHP_SELF); ?>>
		<li><input type=text name=link1 value='<?php echo $link1; ?>'></li>
		<li><input type=text name=link2 value='<?php echo $link2; ?>'></li>
		<li><input type=text name=link3 value='<?php echo $link3; ?>'></li>
		<li><input type=text name=link4 value='<?php echo $link4; ?>'></li>
		<li><input type=text name=link5 value='<?php echo $link5; ?>'></li>
		<li><input type=text name=link6 value='<?php echo $link6; ?>'></li>
		<li><input type=text name=link7 value='<?php echo $link7; ?>'></li>
		<li><input type=text name=link8 value='<?php echo $link8; ?>'></li>
		<div class='col'><input type=submit name=go value='Go'>
		</form>
	<?php
		}
	
	}
	?>
	</div>
<!-- END ENTER HEADINGS FOR PRIMARY LINKS -->




	<div id="l2" class="col">

	<!-- ENTER TITLES FOR SIDE MENU LINKS -->
	<?php
	if($res4 = $mysqli->query("select * from catlinks where delrec != 'on' and siteid='$siteid'")){
		if($myrow4=$res4->fetch_object()){
		do{
		printf("<p>Catlinks/Secondary Links</p><form method=post action='%s'>
		<li><input type='text' name=sidenav1 value='%s'></li>
		<li><input type='text' name=sidenav2 value='%s'></li>
		<li><input type='text' name=sidenav3 value='%s'></li>
		<li><input type='text' name=sidenav4 value='%s'></li>
		<li><input type='text' name=sidenav5 value='%s'></li>
		<li><input type='text' name=sidenav6 value='%s'></li>
		<li><input type='text' name=sidenav7 value='%s'></li>
		<li><input type='text' name=sidenav8 value='%s'></li>
		<li><input type='text' name=sidenav9 value='%s'></li>
		<li><input type='text' name=sidenav10 value='%s'></li>
		<li><input type='text' name=sidenav11 value='%s'></li>
		<li><input type='text' name=sidenav12 value='%s'></li>
		<li><input type='text' name=sidenav13 value='%s'></li>
		<li><input type='text' name=sidenav14 value='%s'></li>
		<li><input type='text' name=sidenav15 value='%s'></li>
		<li><input type='submit' name='save' value='save'></li>
		</form>",htmlspecialchars($PHP_SELF), $myrow4->sidenav1, $myrow4->sidenav2, $myrow4->sidenav3, $myrow4->sidenav4,
		$myrow4->sidenav5, $myrow4->sidenav6, $myrow4->sidenav7, $myrow4->sidenav8, $myrow4->sidenav9,
		$myrow4->sidenav10, $myrow4->sidenav11, $myrow4->sidenav12, $myrow4->sidenav13, $myrow4->sidenav14,
		$myrow4->sidenav15);

		} while($myrow4=$res4->fetch_object());
		} else {
		?>
		<p>Catlinks/Secondary Links</p>

		<form method=post action='<?php htmlspecialchars($PHP_SELF);?>'>
			<li><input type='text' name=sidenav1 value='<?php echo $sidenav1; ?>'></li>
			<li><input type='text' name=sidenav2 value='<?php echo $sidenav2; ?>'></li>
			<li><input type='text' name=sidenav3 value='<?php echo $sidenav3; ?>'></li>
			<li><input type='text' name=sidenav4 value='<?php echo $sidenav4; ?>'></li>
			<li><input type='text' name=sidenav5 value='<?php echo $sidenav5; ?>'></li>
			<li><input type='text' name=sidenav6 value='<?php echo $sidenav6; ?>'></li>
			<li><input type='text' name=sidenav7 value='<?php echo $sidenav7; ?>'></li>
			<li><input type='text' name=sidenav8 value='<?php echo $sidenav8; ?>'></li>
			<li><input type='text' name=sidenav9 value='<?php echo $sidenav9; ?>'></li>
			<li><input type='text' name=sidenav10 value='<?php echo $sidenav10; ?>'></li>
			<li><input type='text' name=sidenav11 value='<?php echo $sidenav11; ?>'></li>
			<li><input type='text' name=sidenav12 value='<?php echo $sidenav12; ?>'></li>
			<li><input type='text' name=sidenav13 value='<?php echo $sidenav13; ?>'></li>
			<li><input type='text' name=sidenav14 value='<?php echo $sidenav14; ?>'></li>
			<li><input type='text' name=sidenav15 value='<?php echo $sidenav15; ?>'></li>
			<li><input type='submit' name='save' value='save'></li>
		</form>
	
		<?php
		}

	}
	?>
	<!-- END ENTER TITLES FOR SIDE MENU LINKS -->

	<!-- END CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
	<!-- LIST CATEGORIES - DELETE CATEGORIES -->
	</div>

	
</div></div><div class="container"><div class="row">


	<div id="l3" class="col">

	<!-- CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
	<?php
	if($res14 = $mysqli->query("select * from catlinks where delrec != 'on' and siteid='$siteid'")){
		while($myrow14=$res14->fetch_object()){
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

	}
	?>
	<p>Create Categories for your links and pages</p>
	<form method="post" action="<?php echo htmlspecialchars($PHP_SELF);  ?>">


	<p><a name='categories'>Create a category/if content exists, all posts associated with this category will fall underneath this top level , or this can be used as a portal., if no target url exists and there is no content for a particular category, the category will not appear.</a></p>

	<p>Category Name<input type="text" name="catname" value="<?php echo $catname;?>"></p>
	<p><textarea name="catdesc" rows=5 cols=15></textarea></p>
	<p>Group<input type="text" name="cat_group" value="<?php echo $cat_group;?>"></p>
	<p>Category URL<input type="text" name="cat_url" value="<?php echo $cat_url;?>"></p>
	<p>List Order<input type="text" name="listorder" value="<?php echo $cat_group;?>"></p>
	<p><input style='font-family:verdana,sans-serif;font-size:7.5pt' type="submit" name="create_category" value="Enter"></p>

	<input type="hidden" name="siteid" value="<?php echo $siteid;?>">
	</div>


<div class="col">Check all categories<br/>associated with this content.

<!--<p>TODO make each primary link associate to a different page depending on navigation links as was the original design </p>
<br/><p>For Example, by clicking on the sidenav/category will brink up new primary links with content specific to the selected category   15 sidenavs / 8 primary navs</p>-->
<?php
echo "<div class='container'><div class='row'>";

for($count = 1; $count < 16; $count++) {
	$thissidenav = 'sidenav' . $count;
	$chknav = 'chknav'.$count;
	if($$thissidenav != '') { 	
	
	printf('<div class="col"><p><input class="form-control" type="checkbox" style="width:18px;height:18px;"  name="%s" value="checked" />&nbsp;%s</p></div>',$chknav, $$thissidenav);
	}

}
?>
</form>

<?php
}

if($result = $mysqli->query("select * from categories where siteid='$siteid' and delrec != 'on'")){
//echo "<p>These are your current categories.  To delete one, click on the X</p>";
echo "<p>Delete Categories</p>";
	if($myrow=$result->fetch_object()){
	do{
    printf("<div class='form-group'><p><form method=post action='%s'>
    <input type=submit name='del_category' value='X'>
    <input style='display:none;' type=hidden name='siteid' value='%s'>
    <input style='display:none;' type=hidden name='this_cat_id' value='%s'>%s</form></p></div>", htmlspecialchars($PHP_SELF), $myrow->siteid, $myrow->id, $myrow->catname);
    }while($myrow=$result->fetch_object());
    } else {
    echo "<p>No categories found<p>";
    }
}
?>


</div> <!-- col outer content-->

<div id="l5" class="col">

    <p>Upload Images</p>
    <p>Upload images will copy to the server, you can also copy and paste images in the Post Content section</p>
    <p class="lead">Uploading images here will allow you to reuse the images.</p>
    <!-- UPLOAD FILE TYPES .gif, .jpeg, and .png -->

 
        <div class="form-group">
            <form method='POST' enctype='multipart/form-data' name='frmmain' action='<?php htmlspecialchars($PHP_SELF); ?>'>
            Browse for Image (jpg): <input type="file" name="image_file" size="35">
            <br/>
            <input type="submit" value="  Upload File  " name="action">
            </form>
        </div>
        <!-- END UPLOAD FILE TYPES .gif, .jpeg, and .png -->
   
</div>





</div>


</div>

 <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
      
    <!-- Import popper.js cdn -->
    <script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity=
"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous">
    </script>
      
    <!-- Import javascript cdn -->
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity=
"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous">
    </script>
      
<script>
$(window).ready(function() { 
jumpTo(strLocTag){
    window.location.hash = strLocTag;
}
}
);

</script>
<script>
$( "#imgBrand" ).click(function() {
  $( "#home" ).show();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});

$( "#link1" ).click(function() {
  //$( "#home" ).hide();
  $( "#l1" ).show();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});

$( "#link2" ).click(function() {
  //$( "#home" ).hide();
  $( "#l1" ).hide();
  $( "#l2" ).show();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});

$( "#link3" ).click(function() {
  //$( "#home" ).hide();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).show();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});
$( "#link4" ).click(function() {
  //$( "#home" ).hide();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).show();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});
$( "#link5" ).click(function() {
  //$( "#home" ).hide();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).show();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});

$( "#link6" ).click(function() {
//clicking on Campaigns/Link6 link clears window
//show all divs when clicked on Campaigns/Link6
  //$( "#home" ).hide();
  $( "#l1" ).show();
  $( "#l2" ).show();
  $( "#l3" ).show();
  $( "#l4" ).show();
  $( "#l5" ).show();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});
/*
$( "#link7" ).click(function() {
  //$( "#home" ).hide();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).show();
  $( "#l8" ).hide();

});
$( "#link8" ).click(function() {
  //$( "#home" ).hide();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).show();

});
*/
</script>
<script>
$(document).ready(function() {
$("iframe").addClass('embed-responsive-item');
  $( "#home" ).show();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).hide();
  $( "#l7" ).hide();
  $( "#l8" ).show();
});
</script>
<script>
$(window).ready(function() {
 //alert('Subscribe');
  $( "#home" ).show();
  $( "#l1" ).show();
  $( "#l2" ).show();
  $( "#l3" ).show();
  $( "#l4" ).show();
  $( "#l5" ).show();
  $( "#l6" ).show();
  $( "#l7" ).show();
  $( "#l8" ).show();
});
</script>
</body>
</html>