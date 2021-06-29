<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adding New Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <style>
        .mt-10 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!--NAVBAR LINK    -->
    <?php include "navbar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2> Adding new employee</h2>
                    </div>

                    <form action="controller.php" method="post">
                        <div class="panel-body">
                            <label for="name">Employee Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter employee name" required>

                            <label for="image" class="mt-10">Employee Image:</label>
                            <input type="file" name="image" id="image" class="form-control" accept="image/*" required>

                            <label for="id" class="mt-10">Employee ID:</label>
                            <input type="text" name="e_id" id="e_id" class="form-control" placeholder="Enter employee id" required>

                            <label for="department" class="mt-10">Employee Department:</label>
                            <input type="text" name="department" id="department" class="form-control" placeholder="Enter employee department" required>


                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary btn-block" name="button" id="button"> Add Employee</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
