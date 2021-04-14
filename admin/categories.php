<!-- CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
<div class="row"><div class="col"><p>Create Categories for your links and pages</p>
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
<div class="col form-group">
<!--<p>TODO make each primary link associate to a different page depending on navigation links as was the original design </p>
<br/><p>For Example, by clicking on the sidenav/category will brink up new primary links with content specific to the selected category   15 sidenavs / 8 primary navs</p>-->
<p>Select a Navigation ID</p>
<?php
for($count = 1; $count < 16; $count++) {
	$thissidenav = 'sidenav' . $count;
	$chknav = 'chknav'.$count;
	if($$thissidenav != '') { 		
	printf('<div class="row form-group"><div class="col"><input class="form-control" type="checkbox" name="%s" value="checked" /></div><div class="col">%s</div></div>',$chknav, $$thissidenav);
	}

}

?>
</form>
</div>
<div class="col form-group">

<?php
}


echo "<p>Delete Categories</p>";
if($result = $mysqli->query("select * from categories where siteid='$siteid' and delrec != 'on'")){
//echo "<p>These are your current categories.  To delete one, click on the X</p>";
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

</div>
</div>