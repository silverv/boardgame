<?php
    class Plant {
        private $name;
        private $latinName;
        private $isPlanted;
        private $seeds;

        /**
         * @return int
         */
        public function getSeeds()
        {
            return $this->seeds;
        }

        /**
         * @return boolean
         */
        public function getIsPlanted()
        {
            return $this->isPlanted;
        }

        /**
         * @param boolean $isPlanted
         */
        public function setIsPlanted($isPlanted)
        {
            $this->isPlanted = $isPlanted;
        }
        /**
         * Plant constructor.
         */
        public function __construct($name, $latinName, $isPlanted, $seeds)
        {
            $this->name = $name;
            $this->latinName = $latinName;
            $this->isPlanted = $isPlanted;
            $this->seeds = $seeds;
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
         * @return string
         */
        public function getLatinName()
        {
            return $this->latinName;
        }

        /**
         * @param string $latinName
         */
        public function setLatinName($latinName)
        {
            $this->latinName = $latinName;
        }

        /**
         * @param int $seeds
         */
        public function setSeeds($seeds)
        {
            $this->seeds = $seeds;
        }
    }
?>