<?php
    class Planet {
        public $name;
        public $size;
        public $hasVolcanicActivity;
        public $type;
        public $climate;
        public $hasWater;
        public $plants;
    
        public function __construct() {
            $this->name = '';
            $this->size = 1;
            $this->hasVolcanicActivity = false;
            $this->climate = '';
            $this->type = 'terrestrial';
            $this->hasWater = false;
            $this->plants = [];
        }
        public function addPlant($plant){
            array_push($this->plants, $plant);
        }
    }
?>