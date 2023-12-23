<?php
    include APP_ROOT . '/app/config/DBConnect.php';
    include APP_ROOT.'/app/models/Guide.php';
    class GuideService{
        public function getAllGuides(): array
        {
            global $conn;
            $sql = "select * from guides";
            $stmt = $conn->query($sql);

            $guides = [];
            while($row = $stmt->fetch()){
                $guide = new Guide($row);
                $guides[] = $guide;
            }
            return $guides;
        }
    }
