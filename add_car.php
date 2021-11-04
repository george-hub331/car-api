<?php
require 'class.php';


$a = new car();

if(isset($_GET['km']) && isset($_GET['model']) && isset($_GET['license_plate']) && isset($_GET['max_load']) && isset($_GET['fuel'])){
    
echo $a->createC($_GET['km']/*current km*/,$_GET['model']/*car model*/,$_GET['license_plate']/*license plate*/,$_GET['max_load']/*maximum load in kilogram*/,$_GET['fuel']/*fuel type*/);//property for adding a car to db
}else{
    echo "Data Supplied Incomplete";
}
?>