<?php
require 'class.php';

$a = new car($_GET['id']);/*this is unique id*/

echo $a->createLoc($_GET['lat']/*latitude*/,$_GET['long']/*longitude*/,$_GET['date']/*date*/,$_GET['time']/*time*/);

?>