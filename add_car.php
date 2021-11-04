<?php
require 'class.php';


$a = new car($_GET['id']);/*this is unique id can be left empty*/

echo $a->createC($_GET['km']/*current km*/,$_GET['model']/*car model*/,$_GET['license_plate']/*license plate*/,$_GET['max_load']/*maximum load in kilogram*/,$_GET['fuel']/*fuel type*/);//property for adding a car to db

?>