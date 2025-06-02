<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="public/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Book management</h3>
        <a href="?controller=addBook" class="btn btn-success">Add a new Book</a>
        <table class="table table-hover table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($books as $book):
                ?>
                    <tr>
                        <th scope="row"><?= $book['id']; ?></th>
                        <td><?= $book['name']; ?></td>
                        <td><?= $book['author']; ?></td>
                        <td><?= $book['publisher']; ?></td>
                        <td><?= $book['category']; ?></td>
                        <td><?= $book['price']; ?></td>
                        <td><a href="?controller=editBook&id=<?= $book['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="?controller=removeBook&id=<?= $book['id']; ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="public/bootstrap-5.3.6-dist/js/bootstrap.min.js"></script>
</body>

</html>