<?php
    class Plant {
        public $name;
        public $latinName;
        public $isPlanted;
        public $seeds;
        public $description;
        public $imageURL;

        public function __construct($name, $latinName, $isPlanted, $seeds)
        {
            $this->name = $name;
            $this->latinName = $latinName;
            $this->isPlanted = $isPlanted;
            $this->seeds = $seeds;
            $this->description='Lorem ipsum dolor sim amet';
            $this->imageURL='img/nature-sky-green-cactus-110437.jpg';
        }
    }
?>