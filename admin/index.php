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
  <?php
require ('../comm_connect.php');
require ('../siteid.php');
require ('functions.php');
require ('../css/talis.css');
?>
</head>
<body style="padding-top:110px;">
<div class="container-fluid" >
<?php
require('nav.php');
?>
 
<!--Pad Top-->
<div id="l4" >
<div class="col"><!-- CREATE CONTENT --><br/><br/><br/><br/>
<?php
require('content.php');
?>

<!-- LIST - DELETE CONTENT-->
<?php
require('delContent.php');
?>
<!-- END LIST - DELETE CONTENT-->

</div>
</div>
<div class="row">

<!-- ENTER HEADINGS FOR PRIMARY LINKS -->
<div id="l1"  class="col">

<?php
require('weblinks.php');
?>
</div>

<!-- END ENTER HEADINGS FOR PRIMARY LINKS -->





<div id="l2" class="col">

<!-- ENTER TITLES FOR SIDE MENU LINKS -->
<?php
require('catlinks.php');
?>
<!-- END ENTER TITLES FOR SIDE MENU LINKS -->

<!-- END CREATE CATEGORIES FOR PRIMARY AND SIDE MENU LINKS -->
<!-- LIST CATEGORIES - DELETE CATEGORIES -->
</div>



</div>
<div class="row">
<div id="l3" class="col">

<?php
require('categories.php');
?>

</div>
</div>
<div class="row">

<div id="l5" class="col">

<?php
require('upImages.php');
?>

</div>









</div>
</div>
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
  //$( "#home" ).hide();
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
  //$( "#home" ).hide();
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
  //$( "#home" ).hide();
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
  //$( "#home" ).hide();
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
  //$( "#home" ).hide();
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
  //$( "#home" ).hide();
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
  //$( "#home" ).hide();
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
  //$( "#home" ).hide();
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