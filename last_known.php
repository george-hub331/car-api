<?php
require 'class.php';
header('content-Type: application/json');

$a = new car($_GET['id']);/*this is the unique id */

echo $a->fetch( $_GET['num'] /*this is the number of last known location that should be loaded*/);

?>