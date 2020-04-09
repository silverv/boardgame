<?php
    class Player {

        private $SID;
        private $userID;
        private $userName;
        private $planets;

        /**
         * @param mixed $userName
         */
        public function setUserName($userName)
        {
            $this->userName = $userName;
        }
        /**
         * Player constructor.
         */
        public function __construct ($SID, $userID, $userName, $planets)
        {
            $this->SID = $SID;
            $this->userID = $userID;
            $this->userName = $userName;
            $this->planets = $planets;
        }

        /**
         * @return string
         */
        public function getSID()
        {
            return $this->SID;
        }

        /**
         * @return mixed
         */
        public function getPlanets()
        {
            return $this->planets;
        }

        /**
         * @return mixed
         */
        public function getUserName()
        {
            return $this->userName;
        }

        /**
         * @param string  $planetName
         * @return Planet planet
         */
        public function getPlanet($planetName) {
            return $this->planets[$planetName];
        }

        /**
         * @param Planet $planet
         */
        public function addPlanet($planet){
            array_push($this->planets, $planet);
        }
    }