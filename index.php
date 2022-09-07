<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | University</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php session_start(); include 'conn.php';
        if(!isset($_SESSION['id'])){
            echo "<script>alert('Login First!');</script>";
            echo "<script>location.replace('login.php');</script>";
        }
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">University</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-student.php">Add Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="student-list">
                    <div class="student-list-header">
                        <h3>List of Students</h3>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Student Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Program</th>
                                <th scope="col">Year Level</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3" class="text-center">Action</th>    
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $students_q = "select * from students order by student_num asc";
                            $students_res = $conn->query($students_q);
                            while($row = $students_res->fetch_assoc()){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row['student_num']; ?></th>
                                <td><?php echo $row['lname'].", ".$row['fname']." ".$row['mname']; ?></td>
                                <td><?php echo $row['contact']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['program']; ?></td>
                                <td><?php echo $row['year_level']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
                                <td colspan="2">
                                    <a href="student.php?id=<?php echo $row['student_num']; ?>" class="btn btn-success">Complete Info</a>
                                    <a href="update-student.php?id=<?php echo $row['student_num']; ?>" class="btn btn-info">Edit</a>
                                    <a href="delete-student.php?id=<?php echo $row['student_num']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>