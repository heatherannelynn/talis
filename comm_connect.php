<?php
$mysqli = new mysqli('localhost', 'root', '', 'testDB');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

echo 'Success... ' . $mysqli->host_info . "\n";

$mysqli->close();
?>
