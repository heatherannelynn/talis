<?php
$mysqli = new mysqli('mysql01-dc3.mycorphosting.com:3306', 'commulis_user', 'Wjy42@x9', 'commulis_');

//$mysqli = new mysqli('commulistbiz.startlogicmysql.com', 'heather', 'NewportShorts5!', 'commulist2');
//$mysqli = new mysqli('localhost', 'root', '', 'testimports');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

//echo 'Success... ' . $mysqli->host_info . "\n";

//$mysqli->close();
?>
