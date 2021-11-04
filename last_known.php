<?php
require 'class.php';
header('content-Type: application/json');

$a = new car($_POST['id']);/*this is the unique id */

echo $a->fetch( $_POST['num'] /*this is the number of last known location that should be loaded*/);

?>