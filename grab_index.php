<?php

include('siteid.php');
include('comm_connect.php');





		if($res11 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and featured = 'on'")){
		if($row11=$res11->fetch_object()){

		echo "<div id='home' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row11->authname)) { $authname= $row11->authname; }
  		if(isset($row11->embed_code)) {$embed_code = $row11->embed_code; }
  		if(isset($row11->title)) {$title = $row11->title; }
  		if(isset($row11->thislisting)) {$thislisting = $row11->thislisting; }
  		if(!isset($row11->image_name)) {$image_name = $row11->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p><object>%s</object>',$thislisting, $embed_code);
		
		}while($row11=$res11->fetch_object());
  		echo "</div>";
		}
		}


		if($res12 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link1 = 'on'")){
		if($row12=$res12->fetch_object()){

		echo "<div id='l1' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row12->authname)) { $authname= $row12->authname; }
  		if(isset($row12->embed_code)) {$embed_code = $row12->embed_code; }
  		if(isset($row12->title)) {$title = $row12->title; }
  		if(isset($row12->thislisting)) {$thislisting = $row12->thislisting; }
  		if(!isset($row12->image_name)) {$image_name = $row12->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row12=$res12->fetch_object());
  		echo "</div>";
		}
		}



		if($res13 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link2 = 'on'")){
		if($row13=$res13->fetch_object()){

		echo "<div id='l2' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row13->authname)) { $authname= $row13->authname; }
  		if(isset($row13->embed_code)) {$embed_code = $row13->embed_code; }
  		if(isset($row13->title)) {$title = $row13->title; }
  		if(isset($row13->thislisting)) {$thislisting = $row13->thislisting; }
  		if(!isset($row13->image_name)) {$image_name = $row13->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row13=$res13->fetch_object());
  		echo "</div>";
		}
		}




		if($res14 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link3 = 'on'")){
		if($row14=$res14->fetch_object()){

		echo "<div id='l3' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row14->authname)) { $authname= $row14->authname; }
  		if(isset($row14->embed_code)) {$embed_code = $row14->embed_code; }
  		if(isset($row14->title)) {$title = $row14->title; }
  		if(isset($row14->thislisting)) {$thislisting = $row14->thislisting; }
  		if(!isset($row14->image_name)) {$image_name = $row14->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row14=$res14->fetch_object());
  		echo "</div>";
		}
		}


		if($res15 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link4 = 'on'")){
		if($row15=$res15->fetch_object()){

		echo "<div id='l4' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row15->authname)) { $authname= $row15->authname; }
  		if(isset($row15->embed_code)) {$embed_code = $row15->embed_code; }
  		if(isset($row15->title)) {$title = $row15->title; }
  		if(isset($row15->thislisting)) {$thislisting = $row15->thislisting; }
  		if(!isset($row15->image_name)) {$image_name = $row15->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row15=$res15->fetch_object());
  		echo "</div>";
		}
		}


		if($res16 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link5 = 'on'")){
		if($row16=$res16->fetch_object()){

		echo "<div id='l5' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row16->authname)) { $authname= $row16->authname; }
  		if(isset($row16->embed_code)) {$embed_code = $row16->embed_code; }
  		if(isset($row16->title)) {$title = $row16->title; }
  		if(isset($row16->thislisting)) {$thislisting = $row16->thislisting; }
  		if(!isset($row16->image_name)) {$image_name = $row16->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row16=$res16->fetch_object());
  		echo "</div>";
		}
		}



		if($res17 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link6 = 'on'")){
		if($row17=$res17->fetch_object()){

		echo "<div id='l6' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row17->authname)) { $authname= $row17->authname; }
  		if(isset($row17->embed_code)) {$embed_code = $row17->embed_code; }
  		if(isset($row17->title)) {$title = $row17->title; }
  		if(isset($row17->thislisting)) {$thislisting = $row17->thislisting; }
  		if(!isset($row17->image_name)) {$image_name = $row17->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row17=$res17->fetch_object());
  		echo "</div>";
		}
		}



		if($res18 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link7 = 'on'")){
		if($row18=$res18->fetch_object()){

		echo "<div id='l7' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row18->authname)) { $authname= $row18->authname; }
  		if(isset($row18->embed_code)) {$embed_code = $row18->embed_code; }
  		if(isset($row18->title)) {$title = $row18->title; }
  		if(isset($row18->thislisting)) {$thislisting = $row18->thislisting; }
  		if(!isset($row18->image_name)) {$image_name = $row18->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row18=$res18->fetch_object());
  		echo "</div>";
		}
		}



		if($res19 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and link8 = 'on'")){
		if($row19=$res19->fetch_object()){

		echo "<div id='l8' class='col-md-10 offset-md-2' style='min-height:240px !important;'>";

		do{
		if(isset($row19->authname)) { $authname= $row19->authname; }
  		if(isset($row19->embed_code)) {$embed_code = $row19->embed_code; }
  		if(isset($row19->title)) {$title = $row19->title; }
  		if(isset($row19->thislisting)) {$thislisting = $row19->thislisting; }
  		if(!isset($row19->image_name)) {$image_name = $row19->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$author);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p>',$thislisting);
		
		}while($row19=$res19->fetch_object());
  		echo "</div>";
		}
		}


?>
