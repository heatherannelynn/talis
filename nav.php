<?php
require('comm_connect.php');
include('siteid.php');
//grabbing weblinks
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
<div class="container-fluid"><nav class="header sticky-top navbar navbar-expand-lg navbar-light bg-light">
	  <button id="menuButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span><img src="assets/images/logo_white.png" width="40" /></span>
	  </button>
	  <div class="collapse navbar-collapse" data-toggle="collapse" data-target=".navbar-collapse.show"  id="navbarTogglerDemo01">
	   <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	  <li><a id="imgBrand" class="navbar-brand nav-link active" href="#home"><img src="assets/images/logo_white.png" width="70" /><span class="sr-only">(current)</span></a></li>

		  <li class="nav-item">
		    <a id="link1" class="nav-link" href="#link1"><?php echo $link1; ?></a>
		  </li>
		  <li class="nav-item">
		    <a id="link2" class="nav-link" href="#link2"><?php echo $link2; ?></a>
		  </li>
		<li class="nav-item">
			<a id="link3" class="nav-link" href="#link3"><?php echo $link3; ?></a>
		  </li>
		  <li class="nav-item">
			<a id="link4" class="nav-link" href="#link4"><?php echo $link4; ?></a>
		  </li>
		  <li class="nav-item">
		   <a id="link5" class="nav-link" href="#link5"><?php echo $link5; ?></a>
		  </li>
		  <li class="nav-item">
		  <a id="link6" class="nav-link" href="#link6"><?php echo $link6; ?></a>
		  </li>
		<li class="nav-item">
			<a id="link7" class="nav-link" href="#link7"><?php echo $link7; ?></a>
		  </li>
		  <li class="nav-item">
			<a id="link8" class="nav-link" href="#link8"><?php echo $link8; ?></a>
		  </li>
		   <li class="nav-item">
   <div class="input-group col-md-10  col-lg-12">
            <input class="form-control py-2 border-right-0 border" type="search" id="example-search-input">
            <span class="input-group-append">
              <button class="btn btn-outline-secondary border-left-0 border" type="button">
                    <i class="fa fa-search"></i>
              </button>
            </span>
        </div>		  </li>
		</ul>
		
	  </div> <!-- navbar-->

	  </div> <!-- navbar-->
	</nav>

<?php
} else { echo "Error grabbing primary links."; }
?>
