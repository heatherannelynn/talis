		<?php
		include('comm_connect.php');
		include('siteid.php');
		//grabbing catlinks
		$res3 = $mysqli->query("select * from catlinks where delrec != 'on' and siteid='$siteid'");
		if($myrow3=$res3->fetch_object()){


		echo "<div class='col' style='background-color:#f1f1fa;padding-top:110px;' id='sidemenu'>";
		echo "<h2>Talists</h2>";
		$sidenav1=$myrow3->sidenav1;
		$sidenav2=$myrow3->sidenav2;
		$sidenav3=$myrow3->sidenav3;
		$sidenav4=$myrow3->sidenav4;
		$sidenav5=$myrow3->sidenav5;
		$sidenav6=$myrow3->sidenav6;
		$sidenav7=$myrow3->sidenav7;
		$sidenav8=$myrow3->sidenav8;
		$sidenav9=$myrow3->sidenav9;
		$sidenav10=$myrow3->sidenav10;
		$sidenav11=$myrow3->sidenav11;
		$sidenav12=$myrow3->sidenav12;
		$sidenav13=$myrow3->sidenav13;
		$sidenav14=$myrow3->sidenav14;
		$sidenav15=$myrow3->sidenav15;

		for($count = 1; $count < 16; $count++) {
		$thissidenav = 'sidenav' . $count;


					$res2=$mysqli->query("select * from categories where navid='$thissidenav' and delrec != 'on' and siteid='$siteid'");
					if($myrow2=$res2->fetch_object()){
			
								printf("<h3><a href='#'>%s</a></h3><br/>", $$thissidenav);
								echo "<dd><ul>";
										do{
										
										printf("<h4><a style='color:navy;' target='_blank' id='sidemenu' href='%s'>%s</a></h4><br/>", $myrow2->cat_url, $myrow2->catname);
										//printf("<form method='post' action='%s'><li><a target='_blank' id='sidemenu' href='%s'>%s</a></li><input type='hidden' name='issubmitted' value='1'></form>", $myrow2->cat_url, $myrow2->cat_url, $myrow2->catname);
										}while($myrow2=$res2->fetch_object());
								echo "</ul></dd>";
								

					}

		}
		echo "</div>";
		} else { echo $siteid; }
		?>
		
 