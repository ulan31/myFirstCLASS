<?php
class Room{
    /**
     * @var
     */
    private $color;

    /**
     * function
     */
    public function getColor(){
        echo $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
}

$objRoom = new Room();
$objRoom->setColor("green");
$objRoom->getColor();
