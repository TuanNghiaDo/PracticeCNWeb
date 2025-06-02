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
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Add a new employee</h3>
        <form action="?controller=addEmployee" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name of employee</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name of employee" required>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" name="birthday" id="birthday" required>
            </div>
            <div class="mb-3">
                <label for="room" class="form-label">Room</label>
                <select class="form-control" name="room" id="room" required>
                    <option value="">Choose room</option>
                    <?php foreach ($rooms as $room): ?>
                        <option value="<?= $room->getId(); ?>"><?= $room->getName(); ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="create">Add</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            if (document.querySelector('#class').value === '') {
                event.preventDefault();
                alert('Please select class');
            }
        });
    </script>
</body>

</html>