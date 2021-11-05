<?php
require 'class.php';

$a = new car($_GET['id']);/*this is the unique id */

echo $a->fetch(isset($_GET['num']) ? $_GET['num'] : 5 /*this is the number of last known location that should be loaded*/);

?>