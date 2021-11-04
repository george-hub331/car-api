<?php
require 'class.php';

$a = new car($_POST['car']);

echo $a->createLoc($_POST['loc']);

?>