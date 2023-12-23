<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tours Management</title>
    <link rel="stylesheet" href="<?= DOMAIN . '/app/assets/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= DOMAIN . '/app/assets/fonts-1.11.2/bootstrap-icons.scss' ?>">
    <link rel="stylesheet" href="<?= DOMAIN . '/app/assets/bootstrap-icons.min.css' ?>">

<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">-->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
</head>
<body>
<div class="container">
    <h3 class="text-center my-3">Tours Management</h3>
    <a href="?c=tour&a=create" class="btn btn-success my-3">Add new tour</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Destination</th>
            <th scope="col">Duration</th>
            <th scope="col">Price</th>
            <th scope="col">Guide Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($tours as $tour): ?>
                <tr>
                    <td><?= $tour->getTourID() ?></td>
                    <td><?= $tour->getTourName() ?></td>
                    <td><?= $tour->getDestination() ?></td>
                    <td><?= $tour->getDuration() ?></td>
                    <td><?= $tour->getPrice() ?></td>
                    <td><?= $tour->getGuideName() ?></td>
                    <td>
                        <a class="btn btn-primary" href="?a=edit&id=<?= $tour->getTourID()  ?>">
<!--                            <i class="bi bi-pencil-square"></i>-->
                            Edit
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="?a=delete&id=<?= $tour->getTourID() ?>">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="<?= DOMAIN . '/app/assets/bootstrap.min.js'?>" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>