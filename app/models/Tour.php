<?php

    class Tour{
        private $TourID;
        private $TourName;
        private $Destination;
        private $Duration;
        private $Price;
        private $GuideID;
        private $GuideName;

        public function __construct($row){
            $this->TourID = $row['TourID'] ?? '';
            $this->TourName = $row['TourName'] ?? '';
            $this->Destination = $row['Destination'] ?? '';
            $this->Duration = $row['Duration'] ?? '';
            $this->Price = $row['Price'] ?? '';
            $this->GuideID = $row['GuideID'] ?? '';
            $this->GuideName = $row['GuideName'] ?? '';
        }

        public function getTourID(): mixed
        {
            return $this->TourID;
        }

        public function setTourID(mixed $TourID): void
        {
            $this->TourID = $TourID;
        }

        public function getTourName(): mixed
        {
            return $this->TourName;
        }

        public function setTourName(mixed $TourName): void
        {
            $this->TourName = $TourName;
        }

        public function getDestination(): mixed
        {
            return $this->Destination;
        }

        public function setDestination(mixed $Destination): void
        {
            $this->Destination = $Destination;
        }

        public function getDuration(): mixed
        {
            return $this->Duration;
        }

        public function setDuration(mixed $Duration): void
        {
            $this->Duration = $Duration;
        }

        public function getPrice(): mixed
        {
            return $this->Price;
        }

        public function setPrice(mixed $Price): void
        {
            $this->Price = $Price;
        }

        public function getGuideID(): mixed
        {
            return $this->GuideID;
        }

        public function setGuideID(mixed $GuideID): void
        {
            $this->GuideID = $GuideID;
        }

        public function getGuideName(): mixed
        {
            return $this->GuideName;
        }

        public function setGuideName(mixed $GuideName): void
        {
            $this->GuideName = $GuideName;
        }



    }
