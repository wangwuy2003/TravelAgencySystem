<?php
    include APP_ROOT.'/app/services/TourService.php';
    include APP_ROOT.'/app/services/GuideService.php';

    class TourController{
        public function index(){
            //goi tour service
            $tourService = new TourService();
            $tours = $tourService->getAllTours();
            $guides = (new GuideService())->getAllGuides();
            //goi view
            include APP_ROOT.'/app/views/tour/index.php';
        }

        public function create(){
            $guides = (new GuideService())->getAllGuides();
            include APP_ROOT.'/app/views/tour/create.php';
        }

        public function store(){
            (new TourService())->store($_POST);
            header("Location:?");
        }

        public function edit(){
            $id = $_GET["id"];
            $tour = (new TourService())->find($id);

            include APP_ROOT.'/app/views/tour/edit.php';
        }

        public function update(){
            (new TourService())->update($_POST);
            header("Location:?");
        }

        public function delete(){
            $id = $_GET["id"];
            (new TourService())->delete($id);
            header("Location:?");
        }
    }
