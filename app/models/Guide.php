<?php

    class Guide{
        private $GuideID;
        private $GuideName;
        private $Language;
        private $ExperienceYears;

        public function __construct($row){
            $this->GuideID = $row['GuideID'] ?? '';
            $this->GuideName = $row['GuideName'] ?? '';
            $this->Language = $row['Language'] ?? '';
            $this->ExperienceYears = $row['ExperienceYears'] ?? '';

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

        public function getLanguage(): mixed
        {
            return $this->Language;
        }

        public function setLanguage(mixed $Language): void
        {
            $this->Language = $Language;
        }

        public function getExperienceYears(): mixed
        {
            return $this->ExperienceYears;
        }

        public function setExperienceYears(mixed $ExperienceYears): void
        {
            $this->ExperienceYears = $ExperienceYears;
        }


    }
