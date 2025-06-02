<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="public/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
    <style>
        form {
            width: 30%;
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
        <form action="?controller=addBook" method="POST">
            <h3 class="text-center text-uppercase text-success mt-3 mb-3">Add a new Book</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Name of book</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name of book" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Enter author of book" required>
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Publisher</label>
                <input type="text" class="form-control" name="publisher" id="publisher" placeholder="Enter publisher of book" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-control" required>
                    <option value="">Choose category</option>
                    <option>Ngôn tình</option>
                    <option>Khoa học</option>
                    <option>Thám tử</option>
                    <option>Tiểu thuyết</option>
                    <option>Toán học</option>
                    <option>Văn học</option>
                    <option>Nghệ thuật</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter price of book" required>
            </div>
            <button type="submit" class="btn btn-primary" name="create">Add</button>
        </form>
    </div>
    <script src="public/bootstrap-5.3.6-dist/js/bootstrap.min.js"></script>
</body>

</html>