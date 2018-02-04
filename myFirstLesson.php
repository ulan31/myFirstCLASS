<?php
class Room{

    static public $color = "dsadas";


    static public function getColor(){
        echo "fvfvfdfd";
    }
    public function setColor(){
          echo "sdasdasdsadas";
    }
}

echo Room::$color;
echo '<br>';
Room::getColor();
echo '<br>';
$objRoom = new Room();
echo '<br>';
echo $objRoom::$color;
echo '<br>';
$objRoom::getColor();
