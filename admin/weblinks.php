
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
