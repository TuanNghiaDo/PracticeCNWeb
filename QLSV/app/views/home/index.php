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
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Student management</h3>
        <a href="?controller=addStudent" class="btn btn-success">Add a new Student</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                ?>
                    <tr>
                        <th scope="row"><?= $student->getId(); ?></th>
                        <td><?= $student->getName(); ?></td>
                        <td><?= $student->getClass(); ?></td>
                        <td><?= $student->getGrade(); ?></td>
                        <td>
                            <a href="?controller=editStudent&id=<?= $student->getId(); ?>">
                                <i class="bi bi-pencil-square"></i>
                        </td>
                        <td>
                            <a href="?controller=removeStudent&id=<?= $student->getId(); ?>">
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