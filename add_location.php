<?php
require 'class.php';

$a = new car($_GET['id']);/*this is unique id*/

if (isset($_GET['lat']) && isset($_GET['long']) && isset($_GET['date']) && isset($_GET['time'])
) {
    
echo $a->createLoc($_GET['lat']/*latitude*/,$_GET['long']/*longitude*/,$_GET['date']/*date*/,$_GET['time']/*time*/);

}else{
    echo "data supplied incomplete";
}
?>