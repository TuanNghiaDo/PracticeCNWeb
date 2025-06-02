<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/bootstrap-5.3.6-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="public/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">employee management</h3>
        <a href="?controller=addEmployee" class="btn btn-success">Add a new employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Room</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($employees as $employee) {
                ?>
                    <tr>
                        <th scope="row"><?= $employee->getId(); ?></th>
                        <td><?= $employee->getName(); ?></td>
                        <td><?= $employee->getBirthday(); ?></td>
                        <td><?= $employee->getRoomName(); ?></td>
                        <td>
                            <a href="?controller=editEmployee&id=<?= $employee->getId(); ?>">
                                <i class="bi bi-pencil-square"></i>
                        </td>
                        <td>
                            <a href="?controller=removeEmployee&id=<?= $employee->getId(); ?>">
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