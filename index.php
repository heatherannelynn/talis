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
<style>

@media (min-width: 360px) and (orientation: portrait) {section { padding-top: 8em; }}
@media (min-width: 375px) and (orientation: portrait) {section { padding-top: 8em; }}
@media (min-width: 568px) and (orientation: landscape) {section { padding-top: 5em; }}
@media (min-width: 667px) and (orientation: landscape) {section { padding-top: 5em; }}
@media (min-width: 736px) and (orientation: landscape) {section { padding-top: 5em; }}
@media (min-width: 812px) and (orientation: landscape) {section { padding-top: 6em; }}
@media (min-width: 1024px) and (orientation: portrait) {section { padding-top: 5em; }}
@media (min-width: 1024px) and (orientation: landscape) {section { padding-top: 6em; }}
@media (min-width: 1366px) and (orientation: landscape) {section { padding-top: 6em; }}

html, body {
	font-family: Montserrat, sans-serif;
    font-size:11pt;


}


#main {
background-color:rgb(255,255,255);opacity:0.85;
padding-top:8px;
}


section {
	margin-top:2px;
	color:#000;
	font-family: Montserrat, sans-serif;
	font-weight:200;
	}

h3 {
	color:#000;
	font-family: Montserrat, sans-serif;
	//font-size:12pt;
	}

h4 {
	//padding-top:90px;
	color:#000;
	font-family: Montserrat, sans-serif;
	//font-size:14pt;
	}

li, p, input, label, button {
	//padding-top:90px;
	color:#000;
	font-family: Montserrat, sans-serif;
	font-size:12pt;
	}

a {
	//padding-top:90px;
	color:#000;
	font-family: Montserrat, sans-serif;
	font-size:12pt;
	}

 .btn {
 	font-family:Montserrat;
 	font-weight:800;
 }


.icon-bar {
  position: fixed;
	z-index:99999;
  top:	55%;
	right: 25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.top-container {
  background-color: #492dbe;
  padding: 0px;
  font-weight:500;
  text-align: center;
  z-index: 8888;
  width:100%;
}

.header {
  //padding: 10px 16px;
  background: #fff;
  border-bottom: 5px solid silver;
  color: #f1f1f1;
  z-index: 888;
  padding-right:0;
}

.navbar {
 color: #f1f1f1;
}

.navbar li {
 padding-left:.7em;
 padding-right:.7em;
 font-family: Montserrat, sans-serif;
}

.content {
  padding-top: 120px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  //padding-top: 102px;
}
img {
	max-width:100%;
	height:auto;
}

/* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
	z-index:1000;
  top:	55%;
	right: 0;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 11px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #baa6a6;
}

.facebook {
  //background: #3B5998;
  //color: white;

}

.twitter {
  //background: #55ACEE;
  //color: white;
}f1f1f1

.google {
  //background: #dd4b39;
  //color: white;
}

.instagram {
  //background: #007bb5;
  //color: white;
}

.pinterest {
  //background: #bb0000;
  //color: white;
}

.aButton  {

    width:100%;
    height:100%;
    background:#f1f1f1;
    border:1px #dfec solid;
    padding-left:12px;
    padding-right:12px;
    padding-top:4px;
    padding-bottom:3px;
    color:#000;
   

  
}
      
    </style>
</head>
  
<body>
    <!-- h-100 takes the full height of the body-->
    <div class="container-fluid h-100">
    <div class="row">
    	
         
       <?php
 		require('comm_connect.php');
		require('siteid.php');

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
		}

   if($res3 = $mysqli->query("select * from weblinks where delrec != 'on' and siteid='$siteid'")){
$width='100%';
$row3=$res3->fetch_object();
$linkColor=$row3->linkColor;
$link1=$row3->link1;
$link2=$row3->link2;
$link3=$row3->link3;
$link4=$row3->link4;
$link5=$row3->link5;
$link6=$row3->link6;
$link7=$row3->link7;
$link8=$row3->link8;
 ?>
          
                <!-- Top navbar -->
               <nav class="header sticky navbar navbar-expand-lg 
                                navbar-light bg-light">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/logo_white.png" width="40" /></a>
                    <!-- Hamburger button that toggles the navbar-->
                   <div style="padding:0;padding-right:8px;"> <button  class="navbar-toggler" 
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
                           		    <li class="nav-item"><a id="link1" class="nav-link" href="#l1"><div class="aButton" ><?php echo $link1; ?></div></a></li>
                          		    <li class="nav-item"><a id="link2" class="nav-link" href="#l2"><div class="aButton" ><?php echo $link2; ?></div></a></li>
                          		    <li class="nav-item"><a id="link3" class="nav-link" href="#l3"><div class="aButton" ><?php echo $link3; ?></div></a></li>
                          		    <li class="nav-item"><a id="link4" class="nav-link" href="#l4"><div class="aButton" ><?php echo $link4; ?></div></a></li>
                          		    <li class="nav-item"><a id="link5" class="nav-link" href="#l5"><div class="aButton" ><?php echo $link5; ?></div></a></li>
                          		    <li class="nav-item"><a id="link6" class="nav-link" href="#l6"><div class="aButton" ><?php echo $link6; ?></div></a></li>
                           		    <li class="nav-item"><a id="link7" class="nav-link" href="#l7"><div class="aButton" ><?php echo $link7; ?></div></a></li>
                                    <li class="nav-item"><a id="link8" class="nav-link" href="#l8"><div class="aButton" ><?php echo $link8; ?></div></a></li>
                                        </div>
              
                </nav>
  <?php } ?>
                <!-- Contains the main content of the webpage-->
                <div class='col-10' id='grab_index'>
                   <?php
                  for($i=0;$i<9;$i++){
$flag="link".$i;
$linkDiv="l".$i;
//echo $flag;
$sql="SELECT * FROM classifieds where siteid='".$siteid."' and delrec != 'on' and ".$flag." = 'on'";
if($res11 = $mysqli->query($sql)){
	if($row11=$res11->fetch_object()){
		//echo '<div style="padding-top:120px;"></div>';
	echo "<div id='".$linkDiv."' class='content'>";

		do{
		echo "<div class='row'><div class='col'>";
			if(isset($row11->thislisting)) { $thislisting= $row11->thislisting; }
			if(isset($row11->memberid)) { $memberid= $row11->memberid; }
			if(isset($row11->details)) { $details= $row11->details; }
			if(isset($row11->authname)) { $authname= $row11->authname; }
  		    if(isset($row11->embed_code)) {$embed_code = $row11->embed_code; }
  			if(isset($row11->title)) {$title = $row11->title; }
  			if(isset($row11->target_url)) {$target_url = $row11->target_url; }
  			if(isset($row11->target_name)) {$target_name = $row11->target_name; }
  			if(!isset($row11->image_name)) {$image_name = $row11->image_name; } else { $image_name="https://www.sitesappsimages.com/talis/assets/images/logo_white.png";}
  			if(!isset($row11->contactname)) {$contactname = $row11->contactname; }
  			if(!isset($row11->contactnotes)) {$contactnotes = $row11->contactnotes; } 
  		    if(!isset($row11->contactemail)) {$contactemail = $row11->contactemail; } 
  			if(!isset($row11->contactphone1)) {$contactphone1 = $row11->contactphone1; }
  			if(!isset($row11->contactphone2)) {$contactphone2 = $row11->contactphone2; } 
  			if(isset($row11->linkto)) {$linkto = $row11->linkto; }
            printf('<h4>%s</h4>',$title);
  			printf('<p class="lead">%s</p>',$i);
			printf('<div class="float-left"><img class="img-fluid-height" src="%s" /></div>',$image_name);
  			printf('<p class="para">%s</p><p>%s Target Name for embedded video file URLS</p><p>Read More.. %s</p>',$thislisting, $target_name, $target_url);
			printf('<div class="fluid"><p>Posted By: %s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></div>',$contactname,$contactemail,$contactphone1,$contactphone2,$contactnotes, $details);
		echo "</div></div>";

		}while($row11=$res11->fetch_object());
  	echo "</div>";
	} 
}
		

}

                   ?>
                </div>
            </div><!-row-->
        </div><!--container-->
   


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
  $( "#home" ).hide();
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
  $( "#home" ).hide();
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
  $( "#home" ).hide();
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
  $( "#home" ).hide();
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
  $( "#home" ).hide();
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
  $( "#home" ).hide();
  $( "#l1" ).hide();
  $( "#l2" ).hide();
  $( "#l3" ).hide();
  $( "#l4" ).hide();
  $( "#l5" ).hide();
  $( "#l6" ).show();
  $( "#l7" ).hide();
  $( "#l8" ).hide();

});
$( "#link7" ).click(function() {
  $( "#home" ).hide();
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
  $( "#home" ).hide();
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