<?php
require 'conf.php';

class car{

    public $car = "";

    function __construct($c = "")
    {
        $this->car = $c;//car id
}
    //select data from database
   protected function sel(){
        global $my;
        $c = $this->car;
        $v = mysqli_query($my, "SELECT * FROM cars where id = '$c' || name = '$c'");
        if($v){
            return mysqli_fetch_assoc($v);
        }
    }

    //fetch last known locations
    function fetch($last = 5){
        $ll = $this -> sel();
        if(isset($ll)){
           $y = json_decode($ll['info'],true);
           $z = json_decode($ll['locations'],true);

           $zz = array_reverse($z,true); 
            $lll = [];
            $llz = "<ul>";
            $num = 1;
            foreach($zz as $in => $mm){
                if($num <= $last){
                    $longitude = !isset($mm["logitude"]) ? $mm["longitude"] : $mm["logitude"];
                    
                    $llz .= "<li><strong> $mm[date] - $mm[time] </strong><br><div class='mapouter'><div class='gmap_canvas'><iframe width='400' height='300' id='gmap_canvas' src='https://maps.google.com/maps?q=$mm[latitude],$longitude&t=&z=13&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'></iframe><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div></li><br><br>";
                }
                
                $num++;
            }
            $llz .= "</ul>";
            return $llz;
           
        }else{
            return "ID ".ucwords($this -> car) ." Was Not Found In Our Database";
        }
    }
 //add location property
    function createLoc($latitude = "",$longitude = "", $date = "",$time = ""){
        global $my;

        $c = $this -> car;//car id
        
        $db = $this -> sel();
        if(isset($db)){
            $oo = json_decode($db['locations'], true);

            $oo[] = [
                "longitude" => $longitude,
                "latitude" => $latitude,
                "date" => $date,
                "maps"=>"https://maps.google.com?q=$latitude,$longitude",
                "time" => $time
            ];
            $oo = json_encode($oo);
            if(mysqli_query($my,"UPDATE cars set locations = '$oo' where name = '$c'")){
                return "Location Added Successfully";
            }else{
                return "something went wrong please try again";
            }
        }else{
            return "Your ID does not exist in our db";
        }
    }

    function createC($currentKM = 0,$car_model = "",$license_plate = "",$maxLoad = "",$fuelType = ""){
        global $my;

        $c = $this -> car;

            $xv = [];
            $xv[] = [
                "car_model"=>$car_model,
                "current_KM"=>$currentKM,
                "license_plate"=>$license_plate,"fuel_type"=>$fuelType,
                "max_load_in_kg"=>$maxLoad
            ];
            $xz = json_encode($xv);
            if(mysqli_query($my,"INSERT INTO cars(name, info) values('$c','$xz')")){
                return $car_model." Has Been Added Successfully";
            }else{
                return "Sorry $car_model could not be added to our database";
            }
            
    } 
}
?>