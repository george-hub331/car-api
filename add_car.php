<?php
require 'class.php';


$a = new car($_POST['id']);/*this is unique id can be left empty*/

echo $a->createC($_POST['km']/*current km*/,$_POST['model']/*car model*/,$_POST['license_plate']/*license plate*/,$_POST['max_load']/*maximum load in kilogram*/,$_POST['fuel']/*fuel type*/);//property for adding a car to db

?>