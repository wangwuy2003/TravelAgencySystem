<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management Tour</title>
    <link rel="stylesheet" href="<?= DOMAIN . '/app/assets/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= DOMAIN . '/app/assets/fonts-1.11.2/bootstrap-icons.scss' ?>">
    <link rel="stylesheet" href="<?= DOMAIN . '/app/assets/bootstrap-icons.min.css' ?>">
</head>
<body>
<div class="container">
    <a class="btn btn-primary my-2" href="?">Home</a>
    <h1 class="text text-success text-center my-4">Update tour</h1>
    <form method="POST" action="?c=tour&a=store">
        <input type="hidden" value="<?= $tour->getTourID() ?>" name="TourID">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tour Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="TourName" value="<?= $tour->getTourName() ?>">
        </div>
        <div class="mb-3">
            <label for="Destination" class="form-label">Destination</label>
            <input type="text" class="form-control" id="Destination" aria-describedby="emailHelp" name="Destination" value="<?= $tour->getDestination() ?>">
        </div>
        <div class="mb-3">
            <label for="Duration" class="form-label">Duration</label>
            <input type="text" class="form-control" id="Duration" aria-describedby="emailHelp" name="Duration" value="<?= $tour->getDuration() ?>">
        </div>
        <div class="mb-3">
            <label for="inputPrice" class="form-label">Price</label>
            <input type="text" class="form-control" id="inputPrice" name="Price" value="<?= $tour->getPrice() ?>">
        </div>
        <div class="mb-3">
            <label for="GuideID" class="form-label">Guide ID</label>
            <input type="text" class="form-control" id="GuideID" name="GuideID" value="<?= $tour->getGuideID() ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
