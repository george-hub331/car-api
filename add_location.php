<?php
require 'class.php';

$a = new car($_POST['id']);/*this is unique id*/

echo $a->createLoc($_POST['lat']/*latitude*/,$_POST['long']/*longitude*/,$_POST['date']/*date*/,$_POST['time']/*time*/);

?>