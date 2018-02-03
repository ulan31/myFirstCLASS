<?php
/*
 * Created by PhpStorm.
 * User: aliekov.u
 * Date: 24.01.2018
 * Time: 14:32
 */

class Coor
{
    var $name;
    var $addr;
    function Name(){
        echo "<h1>sdadas</h1>";
    }
    function GetName(){
        echo $this->name;
    }
    function SetName($name){
        $this->name = $name;
        $this->GetName();
    }
}

$object = new Coor;
$object->SetName("Nick");
//$object->GetName();
echo "dsada";