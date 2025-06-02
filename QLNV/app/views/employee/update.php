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
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Update employee</h3>
        <form action="?controller=updateEmployee" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($employee['id']); ?>">
            <div class=" mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="<?php echo htmlspecialchars($employee['name']); ?>">
            </div>
            <div class=" mb-3">
                <label for="birthday" class="form-label">Birthday</label>
                <input type="text" name="birthday" id="birthday" class="form-control" required value="<?php echo htmlspecialchars($employee['birthday']); ?>">
            </div>
            <div class="mb-3">
                <label for="room" class="form-label">Room</label>
                <select name="room" id="room" class="form-control">
                    <?php foreach ($rooms as $room): ?>
                        <option value="<?= $room->getId(); ?>" <?php echo ($employee['RoomId'] == $room->getId()) ? 'selected' : ''; ?>>
                            <?= $room->getName(); ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script>
        document.querySelector('form').addEventListener('submit', e => {
            if (document.getElementById('#gender').value === '' || document.getElementById('#name').value === '') {
                e.preventDefault();
                alert(`Please choose gender and fill student's name!`);
            }
        });
    </script>
</body>

</html>