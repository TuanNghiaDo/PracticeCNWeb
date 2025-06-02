<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
    <title>Trang chủ</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Menu management</h3>
        <a href="?controller=addDishes" class="btn btn-success">Add a new Dishes</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($dishess as $dishes) {
                ?>
                    <tr>
                        <th scope="row"><?= $dishes->getId(); ?></th>
                        <td><?= $dishes->getName(); ?></td>
                        <td><?= $dishes->getCategory(); ?></td>
                        <td><?= $dishes->getDescription(); ?></td>
                        <td>
                            <a href="?controller=editDishes&id=<?= $dishes->getId(); ?>">
                                <i class="bi bi-pencil-square"></i>
                        </td>
                        <td>
                            <a href="?controller=removeDishes&id=<?= $dishes->getId(); ?>">
                                <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="public/bootstrap-5.3.6-dist/js/bootstrap.min.js"></script>
</body>

</html>