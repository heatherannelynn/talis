<?php

include('siteid.php');
include('comm_connect.php');
/* Grab all content designated as featured (link1 through link8 divs l1 through l8
should not be visible until menu button is clicked - Add jQuery functions to remove and add classes accordingly.)*/

if($res11 = $mysqli->query("SELECT * FROM classifieds where siteid='$siteid' and delrec != 'on' and featured = 'on'")){
	if($row11=$res11->fetch_object()){
		//echo '<div style="padding-top:120px;"></div>';
	echo "<div id='home' class='content'>";

		do{
		echo "<div class='row'><div class='col'>";
			if(isset($row11->authname)) { $authname= $row11->authname; }
  			if(isset($row11->embed_code)) {$embed_code = $row11->embed_code; }
  			if(isset($row11->title)) {$title = $row11->title; }
  			if(isset($row11->thislisting)) {$thislisting = $row11->thislisting; }
  			if(!isset($row11->image_name)) {$image_name = $row11->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$i);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			//printf('<p class="para">%s</p><object>%s</object>',$thislisting, $embed_code);
  			printf('<p class="para">%s</p>',$thislisting);
			echo "</div></div>";
		}while($row11=$res11->fetch_object());
  	echo "</div>";
	}
}

// Separate content by divs representing each primary link (link1 through link8 divs l1 through l8 respectively)

for($i=0;$i<8;$i++){
$flag="link".$i;
$linkDiv="l".$i;
//echo $flag;
echo "<hr>";
$sql="SELECT * FROM classifieds where siteid='".$siteid."' and delrec != 'on' and ".$flag." = 'on'";
if($res11 = $mysqli->query($sql)){
	if($row11=$res11->fetch_object()){
		//echo '<div style="padding-top:120px;"></div>';
	echo "<div id='".$linkDiv."' class='content'>";

		do{
		echo "<div class='row'><div class='col'>";
			if(isset($row11->authname)) { $authname= $row11->authname; }
  			if(isset($row11->embed_code)) {$embed_code = $row11->embed_code; }
  			if(isset($row11->title)) {$title = $row11->title; }
  			if(isset($row11->thislisting)) {$thislisting = $row11->thislisting; }
  			if(!isset($row11->image_name)) {$image_name = $row11->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$i);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			//printf('<p class="para">%s</p><object>%s</object>',$thislisting, $embed_code);
  			printf('<p class="para">%s</p>',$thislisting);
		echo "</div></div>";
		}while($row11=$res11->fetch_object());
  	echo "</div>";
	} else { echo $sql;}
}
		

}


?>
