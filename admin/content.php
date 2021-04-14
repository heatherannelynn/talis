<div class="row">
<div class="col form-group">
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
<div class="col form-group">
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
<div class="col form-group">
<p>Content<textarea rows=10 cols=20 name="thislisting"><?php echo $thislisting;?></textarea></p>
<p>Details<textarea rows=10 cols=20 name="details"><?php echo $details;?></textarea></p>
<p>Member ID<input type="text" name="memberid" value="<?php echo $memberid;?>"></p>
</div>
<div class="col form-group">
<p>Target Name<input type="text" name="target_name" value="<?php echo $target_name;?>"></p>
<p>Target URL<input type="text" name="target_url" value="<?php echo $target_url;?>"></p>
<p>Author Name<input type="text" name="authname" value="<?php echo $authname;?>"></p>
<p>Date Created<input type="date" name="origdate" value="<?php echo $origdate;?>"></p>
</div>
<div class="col form-group">
<p>Showdate<input type="date" name="showdate" value="<?php echo $showdate;?>"></p>
<p>Hidedate<input type="date" name="hidedate" value="<?php echo $hidedate;?>"></p>
<p>Contact Name<input type="text" name="contactname" value="<?php echo $contactname;?>"></p>
<p>Contact Notes<input type="text" name="contactnotes" value="<?php echo $contactnotes;?>"></p>
<p>Contact Email<input type="text" name="contactemail" value="<?php echo $contactemail;?>"></p>
<p>Contact Phone1<input type="text" name="contactphone1" value="<?php echo $contactphone1;?>"></p>
<p>Contact Phone2<input type="text" name="contactphone2" value="<?php echo $contactphone2;?>"></p>
<p>Link to URL<input type="text" name="linkto" value="<?php echo $linkto;?>"></p>
<p><input style='font-family:verdana,sans-serif;font-size:7.5pt' type="submit" name="create_classified" value="Enter"></p>
</form></div>
</div>
<!-- END CREATE CONTENT -->
