<?php
    include APP_ROOT . '/app/config/DBConnect.php';
    include APP_ROOT.'/app/models/Tour.php';

    class TourService{
        public function getAllTours(): array
        {
            global $conn;
            $sql = "select tours.*, guides.GuideName as GuideName from tours inner join guides on tours.GuideID = guides.GuideID order by TourID desc";
            $stmt = $conn->query($sql);

            $tours = [];
            while($row = $stmt->fetch()){
                $tour = new Tour($row);
                $tours[] = $tour;
            }
            return $tours;
        }

        public function store($params): void
        {
            global $conn;
            $object = new Tour($params);
            $sql = "insert into tours(TourName, Destination, Duration, Price, GuideID) values('" . $object->getTourName() . "', '" . $object->getDestination() . "', '" . $object->getDuration() . "', '" . $object->getPrice() . "', '" . $object->getGuideID() ."')";
            $stmt = $conn->query($sql);
        }

        public function find($id){
            global $conn;
            $sql = "select * from tours where TourID = '$id'";
            $stmt = $conn->query($sql);
            $each = $stmt->fetch();
            return new Tour($each);
        }

        public function update(array $params){
            global $conn;
            $object = new Tour($params);
            $sql = "update tours set TourName = '" . $object->getTourName() . "', Destination = '" . $object->getDestination() . "', Duration = '" . $object->getDuration() . ", Price = '" . $object->getPrice() . ", GuideID = '" . $object->getGuideID() .  "' where TourID = '" . $object->getTourID() . "'";
            $stmt = $conn->query($sql);
        }

        public function delete($id){
            global $conn;
            $sql = "delete from tours where TourID = '$id'";
            $stmt = $conn->query($sql);
        }
    }
