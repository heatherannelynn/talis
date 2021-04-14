<?php
$res7=$mysqli->query("SELECT * FROM `classifieds` WHERE siteid='$siteid' and delrec != 'on' ");
if($myrow7=$res7->fetch_object()){
echo "<p>Content</p>";
	do{
    if($myrow7->featured != '') { $feat = "Featured"; }
    if($myrow7->link1 != '') { $l1=$link1;}
    if($myrow7->link2 != '') { $l2=$link2;}
    if($myrow7->link3 != '') { $l3=$link3;}
    if($myrow7->link4 != '') { $l4=$link4;}
    if($myrow7->link5 != '') { $l5=$link5;}
    if($myrow7->link6 != '') { $l6=$link6;}
    if($myrow7->link7 != '') { $l7=$link7;}
    if($myrow7->link8 != '') { $l8=$link8;}
    printf("<form method=post action=%s><input type=submit name='del_classified' value='X'><input type=hidden
    name=this_class_id value=%s>%s<p><font color=red>%s %s %s %s %s %s %s %s %s </font></p><p>%s</p></form>", htmlspecialchars($PHP_SELF), $myrow7->id, $myrow7->title,
    $feat, $l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $myrow7->thislisting);
	}while($myrow7=$res7->fetch_object());
}

?>