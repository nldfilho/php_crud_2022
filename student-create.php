<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <body class="bg-dark">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Student Add
                                <a href="index.php" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>
                        <div class="card-body bg-dark" style="color: white">
                            <form action="code.php" method="POST">

                                <div class="mb-3">
                                    <label>Student Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Student Name">
                                </div>
                                <div class="mb-3">
                                    <label>Student Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Student Email">
                                </div>
                                <div class="mb-3">
                                    <label>Student Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Student Phone">
                                </div>
                                <div class="mb-3">
                                    <label>Student Course</label>
                                    <input type="text" name="courne" class="form-control" placeholder="Student Course">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>

</html>