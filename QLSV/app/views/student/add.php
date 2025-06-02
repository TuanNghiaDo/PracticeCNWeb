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
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Add a new Student</h3>
        <form action="?controller=addStudent" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name of student</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name of student" required>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">class</label>
                <select class="form-control" name="class" id="class" required>
                    <option value="">Choose class</option>
                    <option>CNTT1</option>
                    <option>CNTT2</option>
                    <option>CNTT3</option>
                    <option>KTPM1</option>
                    <option>KTPM2</option>
                    <option>TTNT1</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">class</label>
                <select class="form-control" name="grade" id="grade" required>
                    <option value="">Choose grade</option>
                    <option>K63</option>
                    <option>K62</option>
                    <option>K66</option>
                    <option>K61</option>
                    <option>K65</option>
                    <option>K64</option>
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