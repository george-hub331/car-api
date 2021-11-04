<?php
require 'class.php';
header('content-Type: text/html');

$a = new car($_POST['car']);

echo $a->fetch();

?>