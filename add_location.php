<?php
require 'class.php';
echo "<div style='width:calc(100% - 16px);text-align:center;padding:10px;margin-bottom:5px;'>";
$a = new car($_GET['id']);/*this is unique id*/

if (isset($_GET['lat']) && isset($_GET['long']) && isset($_GET['date']) && isset($_GET['time'])
) {


echo $a->createLoc($_GET['lat']/*latitude*/,$_GET['long']/*longitude*/,$_GET['date']/*date*/,$_GET['time']/*time*/);

}else{
    echo "data supplied incomplete";
}
echo "</div><a style='width:calc(100% - 16px);text-align:center;padding:10px;margin-bottom:5px;display:block;background-color:#069C54;color:#fff;text-decoration:none;cursor:pointer;' href='addlocation.php?mode=$_GET[id]'>Add Another Location</a>
<a style='width:calc(100% - 16px);text-align:center;padding:10px;margin-bottom:5px;display:block;background-color:#069C54;color:#fff;text-decoration:none;cursor:pointer;' href='viewlast.php?mode=$_GET[id]'>View X Location For This Device</a>";
?>