<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Delete Employee</h3>
        <form action="?controller=removeEmployee" method="POST">
            <div class=" mb-3">
                <label for="id" class="form-label">Id</label>
                <input readonly class="form-control" type="text" name="id" value="<?php echo htmlspecialchars($employee['id']); ?>">
            </div>
            <div class=" mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input readonly type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($employee['name']); ?>">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input readonly type="date" name="birthday" id="birthday" class="form-control" value="<?php echo htmlspecialchars($employee['birthday']); ?>">
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">Room</label>
                <input type="text" name="room" id="room" class="form-control" readonly value="<?php echo htmlspecialchars($room['name']); ?>">
            </div>
            <div class="alert alert-danger">
                <p class="text-center">Are you sure you want to delete this employee?</p>
                <div class="d-flex justify-content-end ms-2">
                    <button class="btn btn-danger btn-sm me-2 w-25" type="submit" name="remove">Delete</button>
                    <button class="btn btn-secondary btn-sm w-25" type="submit" name="cancel">Cancel</button>
                </div>

            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>