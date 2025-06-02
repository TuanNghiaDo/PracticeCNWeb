<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
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
        <form action="?controller=updateBook&id=<?= $book['id'] ?>" method="POST">
            <h3 class="text-center text-uppercase text-success mt-3 mb-3">Update Book</h3>
            <input type="hidden" name="id" value="<?= $book['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name of book</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $book['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author" value="<?= $book['author']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher" id="publisher" value="<?= $book['publisher']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control" required>
                    <option <?php echo ($book['category'] == 'Ngôn tình') ? 'selected' : ''; ?>>Ngôn tình</option>
                    <option <?php echo ($book['category'] == 'Khoa học') ? 'selected' : ''; ?>>Khoa học</option>
                    <option <?php echo ($book['category'] == 'Thám tử') ? 'selected' : ''; ?>>Thám tử</option>
                    <option <?php echo ($book['category'] == 'Tiểu thuyết') ? 'selected' : ''; ?>>Tiểu thuyết</option>
                    <option <?php echo ($book['category'] == 'Toán học') ? 'selected' : ''; ?>>Toán học</option>
                    <option <?php echo ($book['category'] == 'Văn học') ? 'selected' : ''; ?>>Văn học</option>
                    <option <?php echo ($book['category'] == 'Nghệ thuật') ? 'selected' : ''; ?>>Nghệ thuật</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" value="<?= $book['price']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary " name="update">Update</button>
        </form>
    </div>

    <script src=" public/bootstrap-5.3.6-dist/js/bootstrap.min.js"></script>
</body>

</html>