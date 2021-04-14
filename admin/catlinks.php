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