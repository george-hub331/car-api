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
       
            $mapData = [];
            $num = 1;
            foreach($zz as $in => $mm){
                if($num <= $last){
                    $longitude = !isset($mm["logitude"]) ? $mm["longitude"] : $mm["logitude"];
                    $latitude = $mm['latitude'];
                    $date = $mm['date'].' - '.$mm['time'];

            $mapData[] = ['<div id=\'content\'><div id=\'siteNotice\'></div><div><p>'.$date.'</p></div></div>',$latitude,$longitude];        
                    
            }
                
                $num++;
            }
        //returns data 
            return json_encode($mapData);
           
        }else{
            //return error message
            return json_encode([
                "error" => "<div style='width:calc(100% - 16px);text-align:center;background-color: #069C54;color:#fff;padding:10px;margin-bottom:5px;'> ID " . ucwords($this->car) . " Was Not Found In Our Database</div>"
            ]);
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
                "date" => $date.' - '.$time
            ];
            $oo = json_encode($oo);
            if(mysqli_query($my,"UPDATE cars set locations = '$oo' where name = '$c'")){
                return "Location Added Successfully";
            }else{
                return "something went wrong please try again";
            }
        }else{
            return "This ID does not exist in our DB";
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
                return "<div style='width:calc(100% - 16px);text-align:center;background-color: #069C54;color:#fff;padding:10px;margin-bottom:5px;'>$car_model Has Been Added Successfully</div>";
            }else{
                return "<div style='width:calc(100% - 16px);text-align:center;background-color: #069C54;color:#fff;padding:10px;margin-bottom:5px;'>Sorry $car_model could not be added to our database</div>";
                
            }          
    } 
}
?>