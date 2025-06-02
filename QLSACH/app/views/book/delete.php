<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
    <link rel="stylesheet" href="public/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
    <style>
        form {
            width: 50%;
            margin: auto;
        }

        button {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="?controller=removeBook&id=<?= $book['id'] ?>" method="POST">
            <h3 class="text-center text-uppercase text-danger mt-3 mb-3">Delete Book</h3>
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" name="id" id="id" value="<?= $book['id'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name of book</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $book['name'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author" value="<?= $book['author'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher" id="publisher" value="<?= $book['publisher'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" name="category" id="category" value="<?= $book['category'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="<?= $book['price'] ?>" readonly>
            </div>
            <button type="submit" class="btn btn-danger " name="remove">Delete</button>
        </form>
    </div>
</body>

</html>