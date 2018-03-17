<?php
    class Venue implements JsonSerializable {

        private $id;
        private $name;
        private $address;
        private $city;
        private $province;
        private $postalCode;
        private $lat;
        private $lng;
        private $email;

        /**
         * Venue constructor.
         * @param $id
         * @param $name
         * @param $address
         * @param $city
         * @param $province
         * @param $postalCode
         * @param $lat
         * @param $lng
         * @param $email
         */
        public function __construct($id, $name, $address, $city, $province, $postalCode, $lat, $lng, $email)
        {
            $this->id = $id;
            $this->name = $name;
            $this->address = $address;
            $this->city = $city;
            $this->province = $province;
            $this->postalCode = $postalCode;
            $this->lat = $lat;
            $this->lng = $lng;
            $this->email = $email;
        }


        public function jsonSerialize()
        {
            return [
                'Id' => $this->id,
                'Name' => $this->name,
                'Latitude' => $this->lat,
                'Longitude' => $this->lng,
                'Address' => $this->address,
                'City' => $this->city,
                'Province' => $this->province,
                'PostalCode' => $this->postalCode
            ];
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getAddress()
        {
            return $this->address;
        }

        /**
         * @param mixed $address
         */
        public function setAddress($address)
        {
            $this->address = $address;
        }

        /**
         * @return mixed
         */
        public function getCity()
        {
            return $this->city;
        }

        /**
         * @param mixed $city
         */
        public function setCity($city)
        {
            $this->city = $city;
        }

        /**
         * @return mixed
         */
        public function getProvince()
        {
            return $this->province;
        }

        /**
         * @param mixed $province
         */
        public function setProvince($province)
        {
            $this->province = $province;
        }

        /**
         * @return mixed
         */
        public function getPostalCode()
        {
            return $this->postalCode;
        }

        /**
         * @param mixed $postalCode
         */
        public function setPostalCode($postalCode)
        {
            $this->postalCode = $postalCode;
        }

        /**
         * @return mixed
         */
        public function getLat()
        {
            return $this->lat;
        }

        /**
         * @param mixed $lat
         */
        public function setLat($lat)
        {
            $this->lat = $lat;
        }

        /**
         * @return mixed
         */
        public function getLng()
        {
            return $this->lng;
        }

        /**
         * @param mixed $lng
         */
        public function setLng($lng)
        {
            $this->lng = $lng;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }


        public function __toString()
        {
            return "Venue {Id=$this->id, Name=$this->name
                , Latitude=$this->lat, Longitude=$this->lng
                , Address=$this->address, Email=$this->email}";
        }
    }