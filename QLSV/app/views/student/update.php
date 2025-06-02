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
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Update student</h3>
        <form action="?controller=updateStudent" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($student['id']); ?>">
            <div class=" mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="<?php echo htmlspecialchars($student['name']); ?>">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <select name="class" id="class" class="form-control">
                    <option <?php echo ($student['class'] == 'CNTT1') ? 'selected' : '' ?>>CNTT1</option>
                    <option <?php echo ($student['class'] == 'CNTT2') ? 'selected' : '' ?>>CNTT2</option>
                    <option <?php echo ($student['class'] == 'CNTT3') ? 'selected' : '' ?>>CNTT3</option>
                    <option <?php echo ($student['class'] == 'KTPM1') ? 'selected' : '' ?>>KTPM1</option>
                    <option <?php echo ($student['class'] == 'KTPM2') ? 'selected' : '' ?>>KTPM2</option>
                    <option <?php echo ($student['class'] == 'TTNT1') ? 'selected' : '' ?>>TTNT1</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">class</label>
                <select class="form-control" name="grade" id="grade" required>
                    <option value="">Choose class</option>
                    <option>K63</option>
                    <option>K62</option>
                    <option>K66</option>
                    <option>K61</option>
                    <option>K65</option>
                    <option>K64</option>
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