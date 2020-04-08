<?php 
interface IPlant {
    private $name;
    private $latinName;
    public function getName();
    public function setName($name);
    public function getLatinName();
    public function setLatinName($latinName);
}
?>