<?php
require 'conf.php';

class car{

    public $car = "";

    function __construct(string $c)
    {
        global $my;
        if(!empty($c)){
        $this->car = strtolower(mysqli_real_escape_string($my,$c));
    }else{
        echo "No Car Name Was Given";
        return;
    }
}

   protected function sel(){
        global $my;
        $c = $this->car;
        $v = mysqli_query($my, "SELECT * FROM cars where name = '$c'");
        if($v){
            return mysqli_fetch_assoc($v);
        }
    }
    function fetch(){
        $ll = $this -> sel();
        if(isset($ll)){
           $l = json_decode($ll['locations'],true);
           $mm = "<strong>$ll[name] Last Known Locations</strong><br>";
           if(!empty($ll['locations'])){
           foreach($l as $d => $p){    
            $mm .= "<strong>".date('g:ia d M Y',$d)."</strong><br><span>".$p."</span><br><br>";
           }
        }
           return $mm;
        }else{
            return ucwords($this -> car) ." Was Not Found In Our Database";
        }
    }

    function createLoc(string $loc = ""){
        global $my;
        $t = time();
        $c = $this -> car;
        $locc = mysqli_real_escape_string($my,$loc);
        $db = $this -> sel();
        if(isset($db)){
            $oo = json_decode($db['locations'], true);
            $oo[$t] = $locc;
            $oo = json_encode($oo);
            if(mysqli_query($my,"UPDATE cars set locations = '$oo' where name = '$c'")){
                return "Location Added Successfully";
            }else{
                return "something went wrong please try again";
            }
        }else{
            return $c." does not exist in our db";
        }
    }

    function createC(){
        global $my;
        $xx = $this -> sel();
        $c = $this -> car;
        if(!isset($xx)){
            if(mysqli_query($my,"INSERT INTO cars(name) values('$c')")){
                return $c." Has Been Added Successfully";
            }else{
                return "Sorry $c could not be added to our database";
            }
        }else{
            return "This Car Already Exists In Our Database, To Differenciate Add A Model Number";
        }        
    } 
}
?>