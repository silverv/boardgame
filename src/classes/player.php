<?php
    class Player {

        private $SID;
        private $firstName;
        private $lastName;
        private $userName;
        private $planets;

        /**
         * @param mixed $firstName
         */
        public function setFirstName($firstName)
        {
            $this->firstName = $firstName;
        }

        /**
         * @param mixed $lastName
         */
        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }

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
        public function __construct ($SID, $firstName, $lastName, $userName, $planets)
        {
            $this->SID = $SID;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
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
        public function getFirstName()
        {
            return $this->firstName;
        }

        /**
         * @return mixed
         */
        public function getLastName()
        {
            return $this->lastName;
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

    }