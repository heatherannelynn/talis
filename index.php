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


      
    </style>
</head>
  
<body>
    <!-- h-100 takes the full height of the body-->
    <div class="container-fluid h-100">
    <div class="row">
    	
         
       <?php
    include('sidemenu.php');
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
                    <a class="navbar-brand" href="#"><img src="assets/images/logo_white.png" width="40" /></a>
                    <!-- Hamburger button that toggles the navbar-->
                    <button class="navbar-toggler" 
                        type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" 
                        aria-controls="navbarNavAltMarkup" 
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse.show" 
                        id="navbarNavAltMarkup">
                       <div class="navbar-nav">
                           		    <li class="nav-item"><a id="link1" onclick="jumpTo('l1'); alert('Link 1 Content'); return true;" class="nav-link" href="#l1"><?php echo $link1; ?></a></li>
                          		    <li class="nav-item"><a id="link2" onclick="jumpTo('l2'); alert('Link 1 Content'); return true;" class="nav-link" href="#l2"><?php echo $link2; ?></a></li>
                          		    <li class="nav-item"><a id="link3" onclick="jumpTo('l3'); alert('Link 1 Content'); return true;" class="nav-link" href="#l3"><?php echo $link3; ?></a></li>
                          		    <li class="nav-item"><a id="link4" onclick="jumpTo('l4'); alert('Link 1 Content'); return true;" class="nav-link" href="#l4"><?php echo $link4; ?></a></li>
                          		    <li class="nav-item"><a id="link5" onclick="jumpTo('l5'); alert('Link 1 Content'); return true;" class="nav-link" href="#l5"><?php echo $link5; ?></a></li>
                          		    <li class="nav-item"><a id="link6" onclick="jumpTo('l6'); alert('Link 1 Content'); return true;" class="nav-link" href="#l6"><?php echo $link6; ?></a></li>
                           		    <li class="nav-item"><a id="link7" onclick="jumpTo('l7'); alert('Link 1 Content'); return true;" class="nav-link" href="#l7"><?php echo $link7; ?></a></li>
                                    <li class="nav-item"><a id="link8" onclick="jumpTo('l8'); alert('Link 1 Content'); return true;" class="nav-link" href="#l8"><?php echo $link8; ?></a></li>
                                        </div>
              
                </nav>
  <?php } ?>
                <!-- Contains the main content of the webpage-->
                <div class='col-10' id='grab_index'>
                   <?php
                   include('grab_index.php');
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