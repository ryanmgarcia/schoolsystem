<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | University</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
            <div class="student-login">
                <div class="student-header">
                    <h3>Student Portal</h3>
                </div>
                <form class="row g-3 login-form" action="student-login-process.php" method="post">
                <div class="col-md-12">
                    <label for="lname" class="form-label">Student Number</label>
                    <input type="text" class="form-control" id="student_num" name="student_num" require>
                </div>
                <div class="col-md-12">
                    <label for="fname" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" require>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>