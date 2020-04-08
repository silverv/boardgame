<?php
    class Plant {
        private $name;
        private $latinName;

        /**
         * Plant constructor.
         */
        public function __construct($name, $latinName)
        {
            $this->name = $name;
            $this->latinName = $latinName;
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
    }
?>