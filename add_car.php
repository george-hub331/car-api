<?php
require 'class.php';

echo "<a style='width:calc(100% - 16px);text-align:center;padding:10px;margin-bottom:5px;display:block;background-color:#069C54;color:#fff;' href='addcar.html'>Add Another Car</a>";

$a = new car($_GET['id']);//unique id

if(isset($_GET['km']) && isset($_GET['model']) && isset($_GET['license_plate']) && isset($_GET['max_load']) && isset($_GET['fuel'])){

echo $a->createC($_GET['km']/*current km*/,$_GET['model']/*car model*/,$_GET['license_plate']/*license plate*/,$_GET['max_load']/*maximum load in kilogram*/,$_GET['fuel']/*fuel type*/);//property for adding a car to db
echo "<a style='width:calc(100% - 16px);text-align:center;padding:10px;margin-bottom:5px;display:block;background-color:#069C54;color:#fff;' href='addlocation.php?mode=$_GET[id]'>Add Location To $_GET[model]</a>";
}else{
    echo "<div style='width:calc(100% - 16px);text-align:center;padding:10px;margin-bottom:5px;display:block;background-color:#069C54;color:#fff;>Data Supplied Incomplete</div>";
}
?>