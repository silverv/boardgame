<?php
    class Planet {
        private $name;
        private $size;
        private $hasVolcanicActivity;
        private $type;
        private $climate;
        private $hasWater;
        private $plants;

        /**
         * Planet constructor.
         */
        public function __construct() {
            $this->name = '';
            $this->size = 1;
            $this->hasVolcanicActivity = false;
            $this->climate = '';
            $this->type = 'terrestrial';
            $this->hasWater = false;
            $this->plants = [];
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return float
         */
        public function getSize()
        {
            return $this->size;
        }

        /**
         * @param float $size
         */
        public function setSize($size)
        {
            $this->size = $size;
        }

        /**
         * @return boolean
         */
        public function getHasVolcanicActivity()
        {
            return $this->hasVolcanicActivity;
        }

        /**
         * @param boolean $hasVolcanicActivity
         */
        public function setHasVolcanicActivity($hasVolcanicActivity)
        {
            $this->hasVolcanicActivity = $hasVolcanicActivity;
        }

        /**
         * @return string
         */
        public function getType()
        {
            return $this->type;
        }

        /**
         * @param string $type
         */
        public function setType($type)
        {
            $this->type = $type;
        }

        /**
         * @return string
         */
        public function getClimate()
        {
            return $this->climate;
        }

        /**
         * @param string $climate
         */
        public function setClimate($climate)
        {
            $this->climate = $climate;
        }

        /**
         * @return boolean
         */
        public function getHasWater()
        {
            return $this->hasWater;
        }

        /**
         * @param boolean $hasWater
         */
        public function setHasWater($hasWater)
        {
            $this->hasWater = $hasWater;
        }


        /**
         * @param Plant $plant
         */
        public function addPlant($plant){
            array_push($this->plants, $plant);
        }

        /**
         * @return array
         */
        public function getPlants()
        {
            return $this->plants;
        }

        /**
         * @param array $plants
         */
        public function setPlants($plants)
        {
            $this->plants = $plants;
        }
    }
?>