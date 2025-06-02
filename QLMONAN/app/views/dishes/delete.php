<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/bootstrap-icons-1.13.1/bootstrap-icons.min.css">
    <title>Document</title>
    <style>
        form {
            width: 50%;
            margin: auto;
        }

        button {
            margin-top: 10px;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Delete student</h3>
        <form action="?controller=removeStudent" method="POST">
            <div class=" mb-3">
                <label for="id" class="form-label">Id</label>
                <input class="form-control" type="text" name="id" value="<?php echo htmlspecialchars($student['id']); ?>">
            </div>
            <div class=" mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="<?php echo htmlspecialchars($student['name']); ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">class</label>
                <select name="class" id="class" class="form-control" disabled>
                    <option selected><?= $student['class'] ?></option>
                </select>
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">grade</label>
                <select name="grade" id="grade" class="form-control" disabled>
                    <option selected><?= $student['grade'] ?></option>
                </select>
            </div>
            <button class="btn btn-danger" type="submit" name="remove">Delete</button>
        </form>
    </div>
    <script src="public/bootstrap-5.3.6-dist/js/bootstrap.min.js"></script>
</body>

</html>