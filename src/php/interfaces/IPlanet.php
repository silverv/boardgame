<?php
interface Planet{
    private $name;
    private $size;
    private $hasVolcanicActivity;
    private $type;
    private $climate;
    private $hasWater;
    private $plants;
    public function getName();
    public function setName($name);
    public function getSize();
    public function setSize($size);
    public function getHasVolcanicActivity();
    public function setHasVolcanicActivity($hasVolcanicActivity);
    public function getType();
    public function setType($type);
    public function getClimate();
    public function setClimate($climate);
    public function getHasWater();
    public function setHasWater($hasWater);
    public function getPlanets();
    public function setPlanets($planets);
    public function addPlant(&$plant);
}

?>